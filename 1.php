<html>
<head>
	<title>FRONT TIER</title>
<script>
function addFields(){
	if(document.getElementById("table").value=="DOCTOR")
	{
		var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Name"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "name";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Age"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "age"
			container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Address"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "address";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Contact"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "contact";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Designation"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "designation";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Visiting"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "visiting";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Permanent"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "permanent";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
	}
	if(document.getElementById("table").value=="PATIENT")
	{
		var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Name"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "name";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Address"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "address";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Contact"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "contact";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Date_Admitted"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "date_Admitted";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Date_Discharged"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "date_Discharged";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
				
				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Sex"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "sex";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table").value=="RECORD")
	{
				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Appointment_Date"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "appointment_date";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
				
				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Description"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "description";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
				
				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Receptionist_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "Receptionist_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table").value=="LABTESTS")
	{


			var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
		
					var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Lab_Assistant"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "lab_Assistant";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
		
					var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Recommending_Doctor"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "recommending_Doctor";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
		
					var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Report_Date"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "report_Date";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
		
					var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Catalog_Number"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "catalog_Number";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

					var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Name_of_test"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "name_of_test";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));


	}
	if(document.getElementById("table").value=="CHEMIST")
	{
				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Shop_Number"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "shop_Number";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("List"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "list";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Start_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "start_time";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Close_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "close_time";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table").value=="GENERAL")
	{
				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Shop_Number"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "shop_Number";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("List"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "list";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Start_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "start_time";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Close_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "close_time";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));


	}
	if(document.getElementById("table").value=="CANTEEN")
	{
		var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Shop_Number"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "shop_Number";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("List"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "list";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Close_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "close_time";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Start_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "start_time";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table").value=="MEDICINE")
	{
				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Price"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "price";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Expiry_Date"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "expiry_date";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Quantity"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "quantity";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Name"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "name";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Code"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "code";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));


	}
	if(document.getElementById("table").value=="ROOM")
	{
				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Room_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "room_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Room_Type"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "room_type";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Period"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "period";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));


	}
	if(document.getElementById("table").value=="TREATMENT")
	{
				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Surgery"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "surgery";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Therapy"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "therapy";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));


	}
	if(document.getElementById("table").value=="DEPARTMENT")
	{
		var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Department_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "department_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Specialisation"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "specialisation";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Heading_Doctor"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "heading_Doctor";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table").value=="NURSE")
	{
		var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Address"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "address";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Designation"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "designation";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Name"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "name";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Employee_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "employee_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Age"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "age";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Contact"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "contact";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table").value=="RECEPTIONIST")
	{
		var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Salary"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "salary";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Contact"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "contact";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Name"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "name";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Age"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "age";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Employee_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "employee_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Sex"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "sex";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));


	}
	if(document.getElementById("table").value=="EMPLOYEE")
	{
		var number = document.getElementById("table").value;
		var container = document.getElementById("container");
		container.appendChild(document.createTextNode("Employee_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "employee_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
};
function addFields1(){
	if(document.getElementById("table1").value=="DOCTOR")
	{

		var call=document.getElementById("primary");
		call.innerHTML="Contact is the Primary Key here. Which contact you want to delete?";

		var number = document.getElementById("table").value;
		var container = document.getElementById("container1");
		container.appendChild(document.createTextNode("Contact"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "contact";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));


	}
	if(document.getElementById("table1").value=="PATIENT")
	{
		var call=document.getElementById("primary");
		call.innerHTML="Patient_ID is the Primary Key here. Which patient_ID you want to delete?";
		var number = document.getElementById("table").value;
		var container = document.getElementById("container1");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
	}
	if(document.getElementById("table1").value=="RECORD")
	{
				
		var call=document.getElementById("primary");
		call.innerHTML="Receptionist_ID is the Primary Key here. Which Receptionist_ID you want to delete?";
        var number = document.getElementById("table").value;
		var container = document.getElementById("container1");
		container.appendChild(document.createTextNode("Receptionist_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "Receptionist_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table1").value=="LABTESTS")
	{
		var call=document.getElementById("primary");
		call.innerHTML="Catalog_Number is the Primary Key here. Which catalog_Number you want to delete?";
        var number = document.getElementById("table").value;
		var container = document.getElementById("container1");
		container.appendChild(document.createTextNode("Catalog_Number"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "catalog_Number";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
	}
	if(document.getElementById("table1").value=="CHEMIST")
	{
		var call=document.getElementById("primary");
		call.innerHTML="Shop_Number is the Primary Key here. Which shop_Number you want to delete?";
		var number = document.getElementById("table").value;
		var container = document.getElementById("container1");
		container.appendChild(document.createTextNode("Shop_Number"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "shop_Number";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
	}
	if(document.getElementById("table1").value=="GENERAL")
	{
		var call=document.getElementById("primary");
		call.innerHTML="Shop_Number is the Primary Key here. Which shop_Number you want to delete?";
		var number = document.getElementById("table").value;
		var container = document.getElementById("container1");
		container.appendChild(document.createTextNode("Shop_Number"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "shop_Number";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table1").value=="CANTEEN")
	{
		var call=document.getElementById("primary");
		call.innerHTML="Shop_Number is the Primary Key here. Which shop_Number you want to delete?";
		var number = document.getElementById("table").value;
		var container = document.getElementById("container1");
		container.appendChild(document.createTextNode("Shop_Number"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "shop_Number";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table1").value=="MEDICINE")
    {
    	var call=document.getElementById("primary");
		call.innerHTML="Code is the Primary Key here. Which code you want to delete?";
        var number = document.getElementById("table").value;
		var container = document.getElementById("container1");
		container.appendChild(document.createTextNode("Code"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "code";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));


	}
	if(document.getElementById("table1").value=="ROOM")
	{
        var call=document.getElementById("primary");
		call.innerHTML="Room_ID is the Primary Key here. Which room_ID you want to delete?";
		var number = document.getElementById("table").value;
		var container = document.getElementById("container1");
		container.appendChild(document.createTextNode("Room_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "room_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
	}
	if(document.getElementById("table1").value=="TREATMENT")
	{	
		var call=document.getElementById("primary");
		call.innerHTML="Contact is the Primary Key here. Which contact you want to delete?";
	}
	if(document.getElementById("table1").value=="DEPARTMENT")
	{
		var call=document.getElementById("primary");
		call.innerHTML="Department_ID is the Primary Key here. Which department_ID you want to delete?";
		var number = document.getElementById("table").value;
		var container = document.getElementById("container1");
		container.appendChild(document.createTextNode("Department_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "department_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table1").value=="NURSE")
	{
		var call=document.getElementById("primary");
		call.innerHTML="Contact is the Primary Key here. Which contact you want to delete?";
        var number = document.getElementById("table").value;
		var container = document.getElementById("container1");
		container.appendChild(document.createTextNode("Contact"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "contact";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table1").value=="RECEPTIONIST")
	{
		var call=document.getElementById("primary");
		call.innerHTML="Contact is the Primary Key here. Which contact you want to delete?";
       var number = document.getElementById("table").value;
		var container = document.getElementById("container1");
		container.appendChild(document.createTextNode("Contact"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "contact";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table1").value=="EMPLOYEE")
	{
		var call=document.getElementById("primary");
		call.innerHTML="Employee_ID is the Primary Key here. Which employee_ID you want to delete?";
		var number = document.getElementById("table").value;
		var container = document.getElementById("container1");
		container.appendChild(document.createTextNode("Employee_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "employee_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
}
function addFields2(){
	if(document.getElementById("table2").value=="DOCTOR")
	{
		var call=document.getElementById("primary");
		call.innerHTML="Which value do you want to update?";

		/*var number = document.getElementById("table").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Name"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "name";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Age"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "age"
			container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Address"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "address";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));*/

		var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Contact"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "contact";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		/*var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Designation"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "designation";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Visiting"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "visiting";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Permanent"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "permanent";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));*/
	}
	if(document.getElementById("table2").value=="PATIENT")
	{
		var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				/*var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Name"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "name";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Address"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "address";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Contact"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "contact";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Date_Admitted"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "date_Admitted";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Date_Discharged"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "date_Discharged";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
				
				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Sex"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "sex";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));*/

	}
	if(document.getElementById("table2").value=="RECORD")
	{
			/*	var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Appointment_Date"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "appointment_date";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
				
				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Description"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "description";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));*/
				
				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Receptionist_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "Receptionist_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table2").value=="LABTESTS")
	{


			/*var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
		
					var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Lab_Assistant"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "lab_Assistant";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
		
					var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Recommending_Doctor"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "recommending_Doctor";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
		
					var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Report_Date"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "report_Date";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));*/
		
					var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Catalog_Number"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "catalog_Number";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				/*	var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Name_of_test"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "name_of_test";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));*/


	}
	if(document.getElementById("table2").value=="CHEMIST")
	{
				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Shop_Number"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "shop_Number";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

			/*	var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("List"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "list";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Start_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "start_time";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Close_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "close_time";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));*/

	}
	if(document.getElementById("table2").value=="GENERAL")
	{
				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Shop_Number"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "shop_Number";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

			/*	var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("List"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "list";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Start_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "start_time";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Close_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "close_time";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));*/


	}
	if(document.getElementById("table2").value=="CANTEEN")
	{
		var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Shop_Number"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "shop_Number";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		/*		var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("List"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "list";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Close_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "close_time";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Start_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "start_time";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));*/

	}
	if(document.getElementById("table2").value=="MEDICINE")
	{
			/*	var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Price"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "price";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Expiry_Date"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "expiry_date";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Quantity"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "quantity";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Name"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "name";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));*/

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Code"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "code";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));


	}
	if(document.getElementById("table2").value=="ROOM")
	{
			/*	var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));*/

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Room_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "room_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

			/*	var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Room_Type"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "room_type";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Period"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "period";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));*/


	}
	if(document.getElementById("table2").value=="TREATMENT")
	{
			/*	var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Surgery"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "surgery";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Therapy"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "therapy";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));*/


	}
	if(document.getElementById("table2").value=="DEPARTMENT")
	{
		var number = document.getElementById("table2").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Department_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "department_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

			/*	var number = document.getElementById("table").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Specialisation"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "specialisation";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Heading_Doctor"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "heading_Doctor";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));*/

	}
	if(document.getElementById("table2").value=="NURSE")
	{
		/*var number = document.getElementById("table").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Address"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "address";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Designation"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "designation";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Name"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "name";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Employee_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "employee_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Age"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "age";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));*/

				var number = document.getElementById("table").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Contact"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "contact";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table2").value=="RECEPTIONIST")
	{
		/*var number = document.getElementById("table").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Salary"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "salary";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));*/

				var number = document.getElementById("table").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Contact"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "contact";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		/*		var number = document.getElementById("table").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Name"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "name";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Age"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "age";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Employee_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "employee_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Sex"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "sex";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));*/


	}
	if(document.getElementById("table2").value=="EMPLOYEE")
	{
		var number = document.getElementById("table").value;
		var container = document.getElementById("container2");
		container.appendChild(document.createTextNode("Employee_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "employee_ID";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table2").value=="DOCTOR")
	{
		var call=document.getElementById("primary");
		call.innerHTML="Which value do you want to update?";

		var number = document.getElementById("table").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Name"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "namer";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Age"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "ager"
			container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Address"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "addressr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Contact"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "contactr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Designation"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "designationr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Visiting"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "visitingr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Permanent"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "permanentr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

		var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_IDr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
	}
	if(document.getElementById("table2").value=="PATIENT")
	{
		var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_IDr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Name"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "namer";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Address"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "addressr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Contact"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "contactr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Date_Admitted"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "date_Admittedr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Date_Discharged"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "date_Dischargedr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
				
				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Sex"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "sexr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table2").value=="RECORD")
	{
				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_IDr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Appointment_Date"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "appointment_dater";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
				
				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Description"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "descriptionr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
				
				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Receptionist_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "Receptionist_IDr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table2").value=="LABTESTS")
	{


			var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_IDr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
		
					var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Lab_Assistant"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "lab_Assistantr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
		
					var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Recommending_Doctor"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "recommending_Doctorr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
		
					var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Report_Date"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "report_Dater";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));
		
					var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Catalog_Number"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "catalog_Numberr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

					var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Name_of_test"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "name_of_testr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));


	}
	if(document.getElementById("table2").value=="CHEMIST")
	{
				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Shop_Number"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "shop_Numberr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("List"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "listr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Start_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "start_timer";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Close_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "close_timer";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table2").value=="GENERAL")
	{
				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Shop_Number"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "shop_Numberr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("List"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "listr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Start_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "start_timer";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Close_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "close_timer";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));


	}
	if(document.getElementById("table2").value=="CANTEEN")
	{
		var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Shop_Number"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "shop_Numberr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("List"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "listr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Close_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "close_timer";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Start_Time"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "start_timer";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table2").value=="MEDICINE")
	{
				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_IDr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Price"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "pricer";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Expiry_Date"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "expiry_dater";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Quantity"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "quantityr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Name"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "namer";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Code"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "coder";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));


	}
	if(document.getElementById("table2").value=="ROOM")
	{
				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_IDr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Room_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "room_IDr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Room_Type"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "room_typer";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Period"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "periodr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));


	}
	if(document.getElementById("table2").value=="TREATMENT")
	{
				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Patient_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "patient_IDr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Surgery"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "surgeryr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Therapy"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "therapyr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));


	}
	if(document.getElementById("table2").value=="DEPARTMENT")
	{
		var number = document.getElementById("table2").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Department_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "department_IDr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Specialisation"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "specialisationr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Heading_Doctor"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "heading_Doctorr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table2").value=="NURSE")
	{
		var number = document.getElementById("table").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Address"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "addressr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Designation"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "designationr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Name"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "namer";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Employee_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "employee_IDr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Age"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "ager";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Contact"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "contactr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
	if(document.getElementById("table2").value=="RECEPTIONIST")
	{
		var number = document.getElementById("table").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Salary"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "salaryr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Contact"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "contactr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Name"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "namer";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Age"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "ager";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Employee_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "employee_IDr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

				var number = document.getElementById("table").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Sex"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "sexr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));


	}
	if(document.getElementById("table2").value=="EMPLOYEE")
	{
		var number = document.getElementById("table").value;
		var container = document.getElementById("container3");
		container.appendChild(document.createTextNode("Employee_ID"));
		var input = document.createElement("input");
		input.type = "text";
		input.name = "employee_IDr";
		container.appendChild(input);
		container.appendChild(document.createElement("br"));

	}
};

</script>
<style>
body {
    background-repeat: no-repeat;
    	background-attachment: fixed;
}
</style>
</head>
<body background="2.jpg">
<center>	<h1>WELCOME TO OUR SITE!!</h1></center><br><br>
<form action="show_all.php">
<h2>CLICK HERE TO VIEW THE ENTIRE DATABASE</h2>
<input type="submit" name="show" id="show"><br><br>
</form>


<h2>FORM FOR INSERTING QUERIES</h2>
<form action="insert.php" method="post">
NAME OF THE TABLE:<input id="table"type="text" value="" name="nameoftable">
<div id="container">
</div>
<a href="#" id="filldetails" onclick="addFields()">Fill Details</a>
<input type="submit">
</form>
<br><br>
<h2>FORM FOR DELETING QUERIES</h2>
<form action="delete.php" method="post">
NAME OF THE TABLE:<input id="table1"type="text" value="" name="nameoftable1">
<div id="primary"></div>
<div id="container1">
</div>

<a href="#" id="filldetails" onclick="addFields1()">Fill Details</a>
<input type="submit">
</form><br><br>
<h2>FORM FOR UPDATING</h2>
<form action="update.php" method="post">
	
NAME OF THE TABLE:<input id="table2"type="text" value="" name="nameoftable2">
<div id="container2">
</div>
<a href="#" id="filldetails" onclick="addFields2()">Fill Details</a><br>
<h3>REPLACE WITH</h3>
<div id="container3">
</div>
<input type="submit">
</form><br><br>
</body>
</html>
