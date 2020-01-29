<?php
    require_once("template_class.php");
    require_once("contacts_class.php");

    class lg_editor {
        var $_storage;
        var $_email;
        var $_phone;
        var $_phoneAC;
        var $_fax;
        var $_faxAC;
        var $_firstName;
        var $_lastName;
        var $_type;
        var $__lg_id;
        var $__ref_type;
        var $__lg_code;

        function lg_editor($lg_id=NULL) {
            if(is_null($lg_id)) {
                return(FALSE);
            }

            // call parent constructor
            $this->_storage   = new contact();
            $this->_phone     = NULL;
            $this->_phoneAC   = NULL;
            $this->_firstName = NULL;
            $this->_lastName  = NULL;
            $this->_fax       = NULL;
            $this->_faxAC     = NULL;
            $this->_email     = NULL;
            $this->_title     = NULL;
            $this->__ref_type = 'lg';
            $this->__lg_id    = $lg_id;
            $this->__lg_code  = 'editor';

            $this->load();
        }

        function copyDefault($vendor_id) {
            if(is_null($this->__lg_id)) return(FALSE);
            if(is_null($vendor_id)) return(FALSE);

            $this->_storage->fetchContact('ven',$vendor_id,'editor');
            $this->_storage->id = NULL;
            $this->_storage->ref_type = $this->__ref_type;
            $this->_storage->code     = $this->__lg_code;
            $this->_storage->ref_id   = $this->__lg_id;
            $this->_storage->commit();
        }


        function setFirstName($firstName) {
            if(is_string($firstName)) {
                $this->_firstName = $firstName;
                return(TRUE);
            }
            return(FALSE);
        }

        function setLastName($lastName) {
            if(is_string($lastName)) {
                $this->_lastName = $lastName;
                return(TRUE);
            }
            return(FALSE);
        }

        function setEmail($email) {
            if(is_string($email)) {
                // should check to see if the email is valid
                $this->_email = $email;
                return(TRUE);
            }
            return(FALSE);
        }

        /* prime area to add some checks */
        function setPhoneNumber($num) { $this->_phone = $num; }
        function setPhoneAreaCode($num) { $this->_phoneAC = $num; }
        function setFaxNumber($num) { $this->_fax = $num; }
        function setFaxAreaCode($num) { $this->_faxAC = $num; }
        function setTitle($str) { $this->_title = $str; }

        function fullName() { return($this->firstName() . " " . $this->lastName()); }
        function fullPhoneNumber() { return("(" . $this->phoneAreaCode() . ") " . $this->phoneNumber()); }
        function fullFaxNumber() { return("(" . $this->faxAreaCode() . ") " . $this->faxNumber()); }
        function emailLink() { return("mailto:" . $this->email()); }

        function firstName() { return($this->_firstName); }
        function lastName() { return($this->_lastName); }
        function phoneNumber() { return($this->_phone); }
        function phoneAreaCode() { return($this->_phoneAC); }
        function faxNumber() { return($this->_fax); }
        function faxAreaCode() { return($this->_faxAC); }
        function email() { return($this->_email); }
        function title() { return($this->_title); }

        function save() {
            if(!$this->validate()) return(FALSE);

            if($this->_storage->fetchContact($this->__ref_type, $this->__lg_id, $this->__lg_code)) {
                // just modify and save
                $this->_storage->first_name = $this->firstName();
                $this->_storage->last_name = $this->lastName();
                $this->_storage->email = $this->email();
                $this->_storage->phone_number = $this->phoneNumber();
                $this->_storage->phone_area_code = $this->phoneAreaCode();
                $this->_storage->fax_number = $this->faxNumber();
                $this->_storage->fax_area_code = $this->faxAreaCode();
                $this->_storage->title = $this->title();
                unset($this->_storage->edit_date);

                $this->_storage->commit();
            } else {
                // new record
                $hash = array(
                    'active'       => 1,
                    'input_date'   => time(),
                    'first_name'   => $this->firstName(),
                    'last_name'    => $this->lastName(),
                    'phone_number' => $this->phoneNumber(),
                    'phone_area_code' => $this->phoneAreaCode(),
                    'fax_number'   => $this->faxNumber(),
                    'fax_area_code' => $this->faxAreaCode(),
                    'email'        => $this->email()
                );
                $this->_storage->addContact($this->__ref_type, $this->__lg_id, $this->__lg_code, &$hash);
            }
        }

        function load() {
            if(is_null($this->__lg_id)) return(FALSE);

            if($this->_storage->fetchContact($this->__ref_type, $this->__lg_id, $this->__lg_code)) {
                $this->setFirstName($this->_storage->first_name);
                $this->setLastName($this->_storage->last_name);
                $this->setPhoneNumber($this->_storage->phone_number);
                $this->setPhoneAreaCode($this->_storage->phone_area_code);
                $this->setFaxNumber($this->_storage->fax_number);
                $this->setFaxAreaCode($this->_storage->fax_area_code);
                $this->setEmail($this->_storage->email);
                return(TRUE);
            } else {
                // no lg_contact for this lg, fetch ven default
                return(FALSE);
            }
        }

        function validate() {
            return(TRUE);
        }

        // static method
        function delete($lg_id) {
            $c = new contact();
            $c->fetchContact('lg',$lg_id,'editor');
            $c->deleteRow($c->id);
            return(TRUE);
        }

        function setEditor($email) {
            $editors = array(
                'mmedaris@landscapeonline.com' => array(
                    'firstName' => 'Michelle',
                    'lastName'  => 'Medaris',
                    'email'     => 'mmedaris@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x136',
                    'faxAC'     => 714,
                    'fax'       => '434-3862'
                ),
                'lshield@landscapeonline.com' => array(
                    'firstName' => 'Larry',
                    'lastName'  => 'Shield',
                    'email'     => 'lshield@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x125',
                    'faxAC'     => 714,
                    'fax'       => '979-3543'
                ),
                'amartin@landscapeonline.com' => array(
                    'firstName' => 'Alli',
                    'lastName'  => 'Martin',
                    'email'     => 'amartin@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x132',
                    'faxAC'     => 714,
                    'fax'       => '979-3543'
                ),
                'jmoreno@landscapeonline.com' => array(
                    'firstName' => 'Jeff',
                    'lastName'  => 'Moreno',
                    'email'     => 'jmoreno@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x116',
                    'faxAC'     => 714,
                    'fax'       => '979-3543'
                ),				
                'mdahl@landscapeonline.com' => array(
                    'firstName' => 'Mike',
                    'lastName'  => 'Dahl',
                    'email'     => 'mdahl@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x124',
                    'faxAC'     => 714,
                    'fax'       => '979-3543'
                ),				
                'skelly@landscapeonline.com' => array(
                    'firstName' => 'Steve',
                    'lastName'  => 'Kelly',
                    'email'     => 'skelly@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x120',
                    'faxAC'     => 714,
                    'fax'       => '979-3543'
                )
            );
            $editor = $editors[$email];
            $this->setFirstName($editor['firstName']);
            $this->setLastName($editor['lastName']);
            $this->setFaxAreaCode($editor['faxAC']);
            $this->setFaxNumber($editor['fax']);
            $this->setPhoneAreaCode($editor['phoneAC']);
            $this->setPhoneNumber($editor['phone']);
            $this->setEmail($editor['email']);
        }

        function selectEditorWidget($email=NULL) {
            $editors = array(
                array(
                    'firstName' => 'Michelle',
                    'lastName'  => 'Medaris',
                    'email'     => 'mmedaris@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x136',
                    'faxAC'     => 714,
                    'fax'       => '434-3862'
                ),
                array(
                    'firstName' => 'Larry',
                    'lastName'  => 'Shield',
                    'email'     => 'lshield@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x125',
                    'faxAC'     => 714,
                    'fax'       => '979-3543'
                ),
                array(
                    'firstName' => 'Alli',
                    'lastName'  => 'Martin',
                    'email'     => 'amartin@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x132',
                    'faxAC'     => 714,
                    'fax'       => '979-3543'
                ),
                array(
                    'firstName' => 'Jeff',
                    'lastName'  => 'Moreno',
                    'email'     => 'jmoreno@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x116',
                    'faxAC'     => 714,
                    'fax'       => '979-3543'
                ),				
                array(
                    'firstName' => 'Mike',
                    'lastName'  => 'Dahl',
                    'email'     => 'mdahl@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x124',
                    'faxAC'     => 714,
                    'fax'       => '979-3543'
                ),				
                array(
                    'firstName' => 'Steve',
                    'lastName'  => 'Kelly',
                    'email'     => 'skelly@landscapeonline.com',
                    'phoneAC'   => 714,
                    'phone'     => '979-5276 x120',
                    'faxAC'     => 714,
                    'fax'       => '979-3543'
                )
            );
            ?><select name="editor"><?php
            foreach($editors as $editor) {
                if($editor['email'] == $email) {
                    $sel = "selected";
                } else {
                    $sel = "";
                }
                ?>
                <option <?= $sel ?> value="<?= $editor['email'] ?>">
                    <?= $editor['firstName'] ?> <?= $editor['lastName'] ?>
                </option>
                <?
            }
            ?></select><?php
        }

    }

?>
