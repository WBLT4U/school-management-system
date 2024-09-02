function Category(){ 
 // this function is used to fill the category list on load

}

function SelectSubCat3(){
// ON selection of category this function will work

removeAllOptions(document.drop_list.SubCat3);
addOption(document.drop_list.SubCat3, "", "", "");

if(document.drop_list.State.value == 'Conventional')
{
addOption(document.drop_list.SubCat3,"Nursery 1 A", "Nursery 1 A");
addOption(document.drop_list.SubCat3,"Nursery 1 B", "Nursery 1 B");
addOption(document.drop_list.SubCat3,"Nursery 2 A", "Nursery 2 A");
addOption(document.drop_list.SubCat3,"Nursery 2 B", "Nursery 2 B");
addOption(document.drop_list.SubCat3,"Nursery 3 A", "Nursery 3 A");
addOption(document.drop_list.SubCat3,"Nursery 3 B", "Nursery 3 B");
addOption(document.drop_list.SubCat3,"Basic 1", "Basic 1");
addOption(document.drop_list.SubCat3,"Basic 2", "Basic 2");
addOption(document.drop_list.SubCat3,"Basic 3", "Basic 3");
addOption(document.drop_list.SubCat3,"Basic 4", "Basic 4");
addOption(document.drop_list.SubCat3,"Basic 5", "Basic 5");
addOption(document.drop_list.SubCat3,"Basic 6", "Basic 6");
addOption(document.drop_list.SubCat3,"JSS 1", "JSS 1");
addOption(document.drop_list.SubCat3,"JSS 2", "JSS 2");
addOption(document.drop_list.SubCat3,"JSS 3", "JSS 3");
addOption(document.drop_list.SubCat3,"SS 1", "SS 1");
addOption(document.drop_list.SubCat3,"SS 2", "SS 2");
addOption(document.drop_list.SubCat3,"SS 3", "SS 3");

}

if(document.drop_list.State.value == 'Islamiyyah')
{
addOption(document.drop_list.SubCat3,"Al-Raudat 1", "Al-Raudat 1");
addOption(document.drop_list.SubCat3,"Al-Raudat 2", "Al-Raudat 2");
addOption(document.drop_list.SubCat3,"Al-Ibidaah 1", "Al-Ibidaah 1");
addOption(document.drop_list.SubCat3,"Al-Ibidaah 2", "Al-Ibidaah 2");
addOption(document.drop_list.SubCat3,"Al-Ibidaah 3", "Al-Ibidaah 3");
addOption(document.drop_list.SubCat3,"Al-Ibidaah 4", "Al-Ibidaah 4");
addOption(document.drop_list.SubCat3,"Al-Ibidaah 5", "Al-Ibidaah 5");

}
if(document.drop_list.State.value == 'Tahfiz')
{
addOption(document.drop_list.SubCat3,"Tahfiz 1", "Tahfiz 1");
addOption(document.drop_list.SubCat3,"Tahfiz 2", "Tahfiz 2");
addOption(document.drop_list.SubCat3,"Tahfiz 3", "Tahfiz 3");
addOption(document.drop_list.SubCat3,"Tahfiz 4", "Tahfiz 4");
}

}


////////////////// 

function removeAllOptions(selectbox)
{
	var i;
	for(i=selectbox.options.length-1;i>=0;i--)
	{
		//selectbox.options.remove(i);
		selectbox.remove(i);
	}
}


function addOption(selectbox, value, text )
{
	var optn = document.createElement("OPTION");
	optn.text = text;
	optn.value = value;

	selectbox.options.add(optn);
}
