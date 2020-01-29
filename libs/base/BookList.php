<?php
    require_once('AmazonBookService.php');
    require_once('template_class.php');

    class BookList extends template_class {
        var $history;
        var $parentName;
        var $errList;

        var $_amazon;
        var $_amz_dev = '0KP1B9Z11EC6AHE08N82';
        var $_amz_tok = 'landscapeonli-20';
        var $_table = 'books';
        var $_columns = array(
                'id',
                'vendor_id',
                'status',
                'slug',
                'size',
                'category',
                'magazines',
                'year',
                'edited',
                'input'
            );

        var $id;
        var $vendor_id;
        var $status;
        var $slug;
        var $size;
        var $category;
        var $magazines;
        var $year;
        var $edited;
        var $input;

        function BookList() {
            $this->instantiate();
            $this->_amazon =& new AmazonBookService($this->_amz_dev, $this->_amz_tok);
        }

        function find_category($id) {
            $sql = "SELECT * FROM book_categories WHERE id=${id}";
            if(DB::isError($result = $this->db->getAll($sql))) {
                $this->dbError("BookList::find_category", $result);
                return(FALSE);
            } else {
                return($result[0]);
            }

        }

        function list_categories() {
            $sql = "SELECT * FROM book_categories ORDER BY name";
            if(DB::isError($result = $this->db->getAll($sql))) {
                $this->dbError("BookList::list_categories", $result);
                return(FALSE);
            } else {
                return($result);
            }
        }

        function find_by_category($cat_id, $flags=NULL) {
            if(!is_numeric($cat_id)) return FALSE;

            $sql = "SELECT * FROM books as b LEFT JOIN books_to_cat as bc ON b.id = bc.book_id WHERE category_id = $cat_id";

            if(!is_null($flags)) $sql .= " AND ${flags}";

            if(DB::isError($result = $this->db->getAll($sql))) {
                $this->dbError("BookList::list_categories", $result);
                return(FALSE);
            } else {
                $books = array();
                foreach($result as $book) {
                    $set =  $this->_amazon->searchIsbn($book['isbn']);
                    $books[$book['isbn']] = $set[0];
                }
                return($books);
            }
        }

        function find_all() {
            $sql = "SELECT * FROM books";

            if(DB::isError($result = $this->db->getAll($sql))) {
                $this->dbError("BookList::find_all", $result);
                return(FALSE);
            } else {
                $books = array();
                foreach($result as $book) {
                    $books[$book['isbn']] = $this->_amazon->searchIsbn($book['isbn']);
                }
                return($books);
            }
        }

        function find_all_raw() {
            $sql = "SELECT * FROM books";

            if(DB::isError($result = $this->db->getAll($sql))) {
                $this->dbError("BookList::find_all", $result);
                return(FALSE);
            } else {
                return($result);
            }
        }

        function cache_all() {
            $books = $this->find_all_raw();
            $this->_amazon->useCache(FALSE);

            foreach($books as $book) {
                print_r($this->_amazon->searchIsbn($book['isbn']));
                sleep(1);
            }

            $this->_amazon->useCache(TRUE);
        }

        /*
        function getLeadGenerators($vendor = NULL,$year = NULL) {
            if(is_null($vendor)) return(FALSE);
            if(!is_numeric($vendor)) return(FALSE);

            $sql = "SELECT * FROM " . $this->dbTable . " WHERE ";
            if(is_numeric($year)) {
                $sql .= " year=$year AND vendor_id=$vendor";
            } else {
                $sql .= " vendor_id=$vendor";
            }
            $sql .= " ORDER BY year desc, status desc";

            if(DB::isError($result = $this->db->getAll($sql))) {
                $this->dbError("LG_MODEL::getLeadGenerators", $result);
                return(FALSE);
            } else {
                return($result);
            }
        }
        */
    }

?>
