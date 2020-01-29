  

<script language="javascript">

	

	/**

	 * Sets client side form to add structure on server side.

	 *

	 * @author	Patrik Laszlo

	 * @copyright	corifeus.com

	 */

	function addLeaf(idParent, nameParent)

		{

			document.structure.action.value = "add";

			document.structure.idParent.value = idParent;

			name = window.prompt("Add a Category to the "+nameParent+ " Directory:", "");

			if (name && name != "null")

			{

			document.structure.name.value = name;

		    document.structure.submit();

		}

	} // end func

	

	

	/**

	 * Sets client side form to edit leaf of id and name on server side.

	 *

	 * @author	Patrik Laszlo

	 * @copyright	corifeus.com

	 */

	function editLeaf(id, name) {

	    document.structure.action.value ="edit";

	    document.structure.id.value = id;

		name = window.prompt("Edit "+name+":", name);

		if (name && name != "null")

		{

			document.structure.name.value = name;

		    document.structure.submit();

		}  

	} // end func



 function editLeafsubnub(id,sub_number) {

	    document.structure.action.value ="edit_sub";

	    document.structure.id.value= id;

	    name = window.prompt("Edit"+ sub_number +":",sub_number );

		

		if (name && name != "null")

		{

		    document.structure.name.value = name;

		    document.structure.submit();

		}  

	} // end func





	

	

	/**

	 * Sets client side form to toggle a leaf on the server side.

	 *

	 * @author	Patrik Laszlo

	 * @copyright	corifeus.com

	 */

	function toggleLeaf(id)

	{

	    document.structure.action.value = 'toggle';

		document.structure.id.value = id;

		document.structure.submit();

	} // end func

	

	

	/**

	 * Sets client side form to delete a leaf on the server side.

	 *

	 * @author	Patrik Laszlo

	 * @copyright	corifeus.com

	 */

	function deleteLeaf(id, name) {

		if (window.confirm("Are you sure to delete "+ name +"?")) {   

		    document.structure.action.value = 'delete';

			document.structure.id.value = id;

			document.structure.submit();

		}

	} // end func



	function add_sm_Leaf(id)

	{      

		window.open('xchange.php');

		

	} // end func





//-->

</script>



	 



