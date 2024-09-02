function Category(){ 
 // this function is used to fill the category list on load

}

function SelectSubCat3(){
// ON selection of category this function will work

removeAllOptions(document.drop_list.SubCat3);
addOption(document.drop_list.SubCat3, "", "", "");

if(document.drop_list.State.value == 'Abuja')
{
addOption(document.drop_list.SubCat3,"Gwagwalada", "Gwagwalada");
addOption(document.drop_list.SubCat3,"Kuje", "Kuje");
addOption(document.drop_list.SubCat3,"Abaji", "Abaji");
addOption(document.drop_list.SubCat3,"Abuja Municipal", "Abuja Municipal");
addOption(document.drop_list.SubCat3,"Bwari", "Bwari");
addOption(document.drop_list.SubCat3,"Kwali", "Kwali");
}

if(document.drop_list.State.value == 'Abia')
{
addOption(document.drop_list.SubCat3,"Aba-North", "Aba-North");
addOption(document.drop_list.SubCat3,"Aba-South", "Aba-South");
addOption(document.drop_list.SubCat3,"Arochukwu", "Arochukwu");
addOption(document.drop_list.SubCat3,"Bende", "Bende");
addOption(document.drop_list.SubCat3,"Ikwuano", "Ikwuano");
addOption(document.drop_list.SubCat3,"Isiala-Ngwa North", "Isiala-Ngwa North");
addOption(document.drop_list.SubCat3,"Isiala-Ngwa South", "Isiala-Ngwa South");
addOption(document.drop_list.SubCat3,"Isuikwato", "Isuikwato");
addOption(document.drop_list.SubCat3,"Obi Nwa", "Obi Nwa");
addOption(document.drop_list.SubCat3,"Ohafia", "Ohafia");
addOption(document.drop_list.SubCat3,"Osisioma", "Osisioma");
addOption(document.drop_list.SubCat3,"Ngwa", "Ngwa");
addOption(document.drop_list.SubCat3,"Ugwunagbo", "Ugwunagbo");
addOption(document.drop_list.SubCat3,"Ukwa East", "Ukwa-East");
addOption(document.drop_list.SubCat3,"Ukwa West", "Ukwa West");
addOption(document.drop_list.SubCat3,"Umuahia-North", "Umuahia-North");
addOption(document.drop_list.SubCat3,"Umuahia-South", "Umuahia-South");
addOption(document.drop_list.SubCat3,"Umu-Neochi", "Umu-Neochi");

}
if(document.drop_list.State.value == 'Adamawa')
{
addOption(document.drop_list.SubCat3,"Demsa", "Demsa");
addOption(document.drop_list.SubCat3,"Fufore", "Fufore");
addOption(document.drop_list.SubCat3,"Ganaye", "Ganaye");
addOption(document.drop_list.SubCat3,"Gireri", "Gireri");
addOption(document.drop_list.SubCat3,"Gombi", "Gombi");
addOption(document.drop_list.SubCat3,"Guyuk", "Guyuk");
addOption(document.drop_list.SubCat3,"Hong", "Hong");
addOption(document.drop_list.SubCat3,"Jada", "Jada");
addOption(document.drop_list.SubCat3,"Lamurde", "Lamurde");
addOption(document.drop_list.SubCat3,"Madagali", "Madagali");
addOption(document.drop_list.SubCat3,"Maiha", "Maiha");
addOption(document.drop_list.SubCat3,"Mayo-Belwa", "Mayo-Belwa");
addOption(document.drop_list.SubCat3,"Michika", "Michika");
addOption(document.drop_list.SubCat3,"Mubi-North", "Mubi-North");
addOption(document.drop_list.SubCat3,"Mubi-South", "Mubi-South");
addOption(document.drop_list.SubCat3,"Numan", "Numan");
addOption(document.drop_list.SubCat3,"Shelleng", "Shelleng");
addOption(document.drop_list.SubCat3,"Song", "Song");
addOption(document.drop_list.SubCat3,"Toungo", "Toungo");
addOption(document.drop_list.SubCat3,"Yola-North", "Yola-North");
addOption(document.drop_list.SubCat3,"Yola-South", "Yola-South");
}

if(document.drop_list.State.value == 'Akwa Ibom')
{
addOption(document.drop_list.SubCat3,"Abak", "Abak");
addOption(document.drop_list.SubCat3,"Eastern Obolo", "Eastern Obolo");
addOption(document.drop_list.SubCat3,"Eket", "Eket");
addOption(document.drop_list.SubCat3,"Esit Eket", "Esit Eket");
addOption(document.drop_list.SubCat3,"Essien Udim", "Essien Udim");
addOption(document.drop_list.SubCat3,"Etim Ekpo", "Etim Ekpo");
addOption(document.drop_list.SubCat3,"Etinan", "Etinan");
addOption(document.drop_list.SubCat3,"Ibeno", "Ibeno");
addOption(document.drop_list.SubCat3,"Ibesikpo Asutan", "Ibesikpo Asutan");
addOption(document.drop_list.SubCat3,"Ibiono Ibom", "Ibiono Ibom");
addOption(document.drop_list.SubCat3,"Ika", "Ika");
addOption(document.drop_list.SubCat3,"Ikono", "Ikono");
addOption(document.drop_list.SubCat3,"Ikot Abasi", "Ikot Abasi");
addOption(document.drop_list.SubCat3,"Ikot Ekpene", "Ikot Ekpene");
addOption(document.drop_list.SubCat3,"Ini", "Ini");
addOption(document.drop_list.SubCat3,"Itu", "Itu");
addOption(document.drop_list.SubCat3,"Mbo", "Mbo");
addOption(document.drop_list.SubCat3,"Mkpat Enin", "Mkpat Enin");
addOption(document.drop_list.SubCat3,"Nsit Atai", "Nsit Atai");
addOption(document.drop_list.SubCat3,"Nsit Ibom", "Nsit Ibom");
addOption(document.drop_list.SubCat3,"Nsit Ubium", "Nsit Ubium");
addOption(document.drop_list.SubCat3,"Obot Akara", "Obot Akara");
addOption(document.drop_list.SubCat3,"Okobo", "Okobo");
addOption(document.drop_list.SubCat3,"Onna", "Onna");
addOption(document.drop_list.SubCat3,"Oron", "Oron");
addOption(document.drop_list.SubCat3,"Oruk Anam", "Oruk Anam");
addOption(document.drop_list.SubCat3,"Udung Uko", "Udung Uko");
addOption(document.drop_list.SubCat3,"Ukanafun", "Ukanafun");
addOption(document.drop_list.SubCat3,"Uruan", "Uruan");
addOption(document.drop_list.SubCat3,"Urue-Offong/Oruko", "Urue-Offong/Oruko");
addOption(document.drop_list.SubCat3,"Uyo", "Uyo");
}

if(document.drop_list.State.value == 'Anambra')
{
addOption(document.drop_list.SubCat3,"Aguata", "Aguata");
addOption(document.drop_list.SubCat3,"Anambra-East", "Anambra-East");
addOption(document.drop_list.SubCat3,"Anambra-West", "Anambra-West");
addOption(document.drop_list.SubCat3,"Anaocha", "Anaocha");
addOption(document.drop_list.SubCat3,"Awka-North", "Awka-North");
addOption(document.drop_list.SubCat3,"Awka-South", "Awka-South");
addOption(document.drop_list.SubCat3,"Ayamelum", "Ayamelum");
addOption(document.drop_list.SubCat3,"Dunukofia", "Dunukofia");
addOption(document.drop_list.SubCat3,"Ekwusigo", "Ekwusigo");
addOption(document.drop_list.SubCat3,"Idemili-North", "Idemili-North");
addOption(document.drop_list.SubCat3,"Idemili-South", "Idemili-South");
addOption(document.drop_list.SubCat3,"Ihiala", "Ihiala");
addOption(document.drop_list.SubCat3,"Njikoka", "Njikoka");
addOption(document.drop_list.SubCat3,"Nnewi-North", "Nnewi-North");
addOption(document.drop_list.SubCat3,"Nnewi-South", "Nnewi-South");
addOption(document.drop_list.SubCat3,"Ogbaru", "Ogbaru");
addOption(document.drop_list.SubCat3,"Onitsha-North", "Onitsha-North");
addOption(document.drop_list.SubCat3,"Onitsha-South", "Onitsha-South");
addOption(document.drop_list.SubCat3,"Orumba-North", "Orumba-North");
addOption(document.drop_list.SubCat3,"Orumba-South", "Orumba-South");
addOption(document.drop_list.SubCat3,"Oyi", "Oyi");
}

if(document.drop_list.State.value == 'Bauchi')
{
addOption(document.drop_list.SubCat3,"Alkaleri", "Alkaleri");
addOption(document.drop_list.SubCat3,"Bauchi", "Bauchi");
addOption(document.drop_list.SubCat3,"Bogoro", "Bogoro");
addOption(document.drop_list.SubCat3,"Dambari", "Dambari");
addOption(document.drop_list.SubCat3,"Darazo", "Darazo");
addOption(document.drop_list.SubCat3,"Dass", "Dass");
addOption(document.drop_list.SubCat3,"Gamawa","Gamawa");
addOption(document.drop_list.SubCat3,"Ganjuwa", "Ganjuwa");
addOption(document.drop_list.SubCat3,"Giade", "Giade");
addOption(document.drop_list.SubCat3,"Itas/Gadau", "Itas/Gadau");
addOption(document.drop_list.SubCat3,"Jama'are", "Jama'are");
addOption(document.drop_list.SubCat3,"Katagum", "Katagum");
addOption(document.drop_list.SubCat3,"Kirfi", "Kirfi");
addOption(document.drop_list.SubCat3,"Misau", "Misau");
addOption(document.drop_list.SubCat3,"Ningi", "Ningi");
addOption(document.drop_list.SubCat3,"Shira", "Shira");
addOption(document.drop_list.SubCat3,"Tafawa-Balewa", "Tafawa-Balewa");
addOption(document.drop_list.SubCat3,"Toro", "Toro");
addOption(document.drop_list.SubCat3,"Warji", "Warji");
addOption(document.drop_list.SubCat3,"Zaki", "Zaki");
}

if(document.drop_list.State.value == 'Bayelsa')
{
addOption(document.drop_list.SubCat3,"Brass", "Brass");
addOption(document.drop_list.SubCat3,"Ekeremor", "Ekeremor");
addOption(document.drop_list.SubCat3,"Kolokuma/Opokuma", "Kolokuma/Opokuma");
addOption(document.drop_list.SubCat3,"Nembe", "Nembe");
addOption(document.drop_list.SubCat3,"Ogbia", "Ogbia");
addOption(document.drop_list.SubCat3,"Sagbama", "Sagbama");
addOption(document.drop_list.SubCat3,"Southern Jaw", "Southern Jaw");
addOption(document.drop_list.SubCat3,"Yenegoa", "Yenegoa");
}

if(document.drop_list.State.value == 'Benue')
{
addOption(document.drop_list.SubCat3,"Ado", "Ado");
addOption(document.drop_list.SubCat3,"Agatu", "Agatu");
addOption(document.drop_list.SubCat3,"Apa", "Apa");
addOption(document.drop_list.SubCat3,"Buruku", "Buruku");
addOption(document.drop_list.SubCat3,"Gboko", "Gboko");
addOption(document.drop_list.SubCat3,"Guma", "Guma");
addOption(document.drop_list.SubCat3,"Gwer-East", "Gwer-East");
addOption(document.drop_list.SubCat3,"Gwer-West", "Gwer-West");
addOption(document.drop_list.SubCat3,"Katsina-Ala", "Katsina-Ala");
addOption(document.drop_list.SubCat3,"Konshisha", "Konshisha");
addOption(document.drop_list.SubCat3,"Kwande", "Kwande");
addOption(document.drop_list.SubCat3,"Logo", "Logo");
addOption(document.drop_list.SubCat3,"Makurdi", "Makurdi");
addOption(document.drop_list.SubCat3,"Obi", "Obi");
addOption(document.drop_list.SubCat3,"Ogbadibo", "Ogbadibo");
addOption(document.drop_list.SubCat3,"Oju", "Oju");
addOption(document.drop_list.SubCat3,"Okpokwu", "Okpokwu");
addOption(document.drop_list.SubCat3,"Ohimini", "Ohimini");
addOption(document.drop_list.SubCat3,"Oturkpo", "Oturkpo");
addOption(document.drop_list.SubCat3,"Tarka", "Tarka");
addOption(document.drop_list.SubCat3,"Ukum", "Ukum");
addOption(document.drop_list.SubCat3,"Ushongo", "Ushongo");
addOption(document.drop_list.SubCat3,"Vandeikya", "Vandeikya");
}

if(document.drop_list.State.value == 'Borno')
{
addOption(document.drop_list.SubCat3,"Abadam", "Abadam");
addOption(document.drop_list.SubCat3,"Askira/Uba", "Askira/Uba");
addOption(document.drop_list.SubCat3,"Bama", "Bama");
addOption(document.drop_list.SubCat3,"Bayo", "Bayo");
addOption(document.drop_list.SubCat3,"Biu", "Biu");
addOption(document.drop_list.SubCat3,"Chibok", "Chibbok");
addOption(document.drop_list.SubCat3,"Damboa", "Damboa");
addOption(document.drop_list.SubCat3,"Dikwa", "Dikwa");
addOption(document.drop_list.SubCat3,"Gubio", "Gubio");
addOption(document.drop_list.SubCat3,"Guzamala", "Guzamala");
addOption(document.drop_list.SubCat3,"Gwoza", "Gwoza");
addOption(document.drop_list.SubCat3,"Hawul", "Hawul");
addOption(document.drop_list.SubCat3,"Jere", "Jere");
addOption(document.drop_list.SubCat3,"Kaga", "Kaga");
addOption(document.drop_list.SubCat3,"Kala/Balge", "Kala/Balge");
addOption(document.drop_list.SubCat3,"Konduga", "Konduga");
addOption(document.drop_list.SubCat3,"Kukawa", "Kukawa");
addOption(document.drop_list.SubCat3,"Kwaya Kusar", "Kwaya Kusar");
addOption(document.drop_list.SubCat3,"Mafa", "Mafa");
addOption(document.drop_list.SubCat3,"Magumeri", "Magumeri");
addOption(document.drop_list.SubCat3,"Maiduguri", "Maiduguri");
addOption(document.drop_list.SubCat3,"Marte", "Marte");
addOption(document.drop_list.SubCat3,"Mobbar", "Mobbar");
addOption(document.drop_list.SubCat3,"Monguno", "Monguno");
addOption(document.drop_list.SubCat3,"Ngala", "Ngala");
addOption(document.drop_list.SubCat3,"Nganzai", "Nganzai");
addOption(document.drop_list.SubCat3,"Shani", "Shani");
}

if(document.drop_list.State.value == 'Cross River')
{
addOption(document.drop_list.SubCat3,"Akpabuyo", "Akpabuyo");
addOption(document.drop_list.SubCat3,"Odukpani", "Odukpani");
addOption(document.drop_list.SubCat3,"Akamkpa", "Akamkpa");
addOption(document.drop_list.SubCat3,"Biase", "Biase");
addOption(document.drop_list.SubCat3,"Abi", "Abi");
addOption(document.drop_list.SubCat3,"Ikom", "Ikom");
addOption(document.drop_list.SubCat3,"Yarkur", "Yarkur");
addOption(document.drop_list.SubCat3,"Odubra", "Odubra");
addOption(document.drop_list.SubCat3,"Boki", "Boki");
addOption(document.drop_list.SubCat3,"Ogoja", "Ogoja");
addOption(document.drop_list.SubCat3,"Yala", "Yala");
addOption(document.drop_list.SubCat3,"Obanliku", "Obanliku");
addOption(document.drop_list.SubCat3,"Obudu", "Obudu");
addOption(document.drop_list.SubCat3,"Calabar-South", "Calabar-South");
addOption(document.drop_list.SubCat3,"Etung", "Etung");
addOption(document.drop_list.SubCat3,"Bekwara", "Bekwara");
addOption(document.drop_list.SubCat3,"Bakassi", "Bakassi");
addOption(document.drop_list.SubCat3,"Calabar Municipality", "Calabar Municipality");
}

if(document.drop_list.State.value == 'Delta')
{
addOption(document.drop_list.SubCat3,"Oshimili", "Oshimili");
addOption(document.drop_list.SubCat3,"Aniocha", "Aniocha");
addOption(document.drop_list.SubCat3,"Aniocha-South", "Aniocha-South");
addOption(document.drop_list.SubCat3,"Ika-South", "Ika-South");
addOption(document.drop_list.SubCat3,"Ika North-East", "Ika North-East");
addOption(document.drop_list.SubCat3,"Ndokwa West", "Ndokwa West");
addOption(document.drop_list.SubCat3,"Ndokwa East", "Ndokwa East");
addOption(document.drop_list.SubCat3,"Isoko-South", "Isoko-South");
addOption(document.drop_list.SubCat3,"Isoko-North", "Isoko-North");
addOption(document.drop_list.SubCat3,"Bomadi", "Bomadi");
addOption(document.drop_list.SubCat3,"Burutu", "Burutu");
addOption(document.drop_list.SubCat3,"Ughelli-South", "Ughelli-South");
addOption(document.drop_list.SubCat3,"Ughelli-North", "Ughelli-North");
addOption(document.drop_list.SubCat3,"Ethiope-West", "Ethiope-West");
addOption(document.drop_list.SubCat3,"Ethiope-East", "Ethiope-East");
addOption(document.drop_list.SubCat3,"Sapele", "Sapele");
addOption(document.drop_list.SubCat3,"Okpe", "Okpe");
addOption(document.drop_list.SubCat3,"Warri-North", "Warri-North");
addOption(document.drop_list.SubCat3,"Warri-South", "Warri-South");
addOption(document.drop_list.SubCat3,"Uvwie", "Uvwie");
addOption(document.drop_list.SubCat3,"Udu", "Udu");
addOption(document.drop_list.SubCat3,"Warri Central", "Warri Central");
addOption(document.drop_list.SubCat3,"Ukwani", "Ukwani");
addOption(document.drop_list.SubCat3,"Oshimili-North", "Oshimili-North");
addOption(document.drop_list.SubCat3,"Patani", "Patani");
}

if(document.drop_list.State.value == 'Ebonyi')
{
addOption(document.drop_list.SubCat3,"Afikpo-South", "Afikpo-South");
addOption(document.drop_list.SubCat3,"Afikpo-North", "Afikpo-North");
addOption(document.drop_list.SubCat3,"Onicha", "Onicha");
addOption(document.drop_list.SubCat3,"Ohaozara", "Ohaozara");
addOption(document.drop_list.SubCat3,"Abakaliki", "Abakaliki");
addOption(document.drop_list.SubCat3,"Ishielu", "Ishielu");
addOption(document.drop_list.SubCat3,"Ikwo", "Ikwo");
addOption(document.drop_list.SubCat3,"Ezza", "Ezza");
addOption(document.drop_list.SubCat3,"Ezza-South", "Ezza-South");
addOption(document.drop_list.SubCat3,"Ohaukwu", "Ohaukwu");
addOption(document.drop_list.SubCat3,"Ebonyi", "Ebonyi");
addOption(document.drop_list.SubCat3,"Ivo", "Ivo");
}

if(document.drop_list.State.value == 'Edo')
{
addOption(document.drop_list.SubCat3,"Esan North-East", "Esan North-East");
addOption(document.drop_list.SubCat3,"Esan South-East", "Esan South-East");
addOption(document.drop_list.SubCat3,"Esan Central", "Esan Central");
addOption(document.drop_list.SubCat3,"Esan West", "Esan West");
addOption(document.drop_list.SubCat3,"Egor", "Egor");
addOption(document.drop_list.SubCat3,"Ukpoba", "Ukpoba");
addOption(document.drop_list.SubCat3,"Central", "Central");
addOption(document.drop_list.SubCat3,"Etsako Central", "Etsako Central");
addOption(document.drop_list.SubCat3,"Etsako East", "Etsako East");
addOption(document.drop_list.SubCat3,"Igueben", "Igueben");
addOption(document.drop_list.SubCat3,"Oredo", "Oredo");
addOption(document.drop_list.SubCat3,"Ovia South-West", "Ovia South-West");
addOption(document.drop_list.SubCat3,"Ovia South-East", "Ovia South-East");
addOption(document.drop_list.SubCat3,"Orhionwon", "Orhionwon");
addOption(document.drop_list.SubCat3,"Uhunmwonde", "Uhunmwonde");
}

if(document.drop_list.State.value == 'Ekiti')
{
addOption(document.drop_list.SubCat3,"Ado", "Ado");
addOption(document.drop_list.SubCat3,"Ekiti-East", "Ekiti-East");
addOption(document.drop_list.SubCat3,"Ekiti-West", "Ekiti-West");
addOption(document.drop_list.SubCat3,"Emure/Ise/Orun", "Emure/Ise/Orun");
addOption(document.drop_list.SubCat3,"Ekiti South-West", "Ekiti South-West");
addOption(document.drop_list.SubCat3,"Ikare", "Ikare");
addOption(document.drop_list.SubCat3,"Irepodun", "Irepodun");
addOption(document.drop_list.SubCat3,"Ijero", "Ijero");
addOption(document.drop_list.SubCat3,"Ido/Osi", "Ido/Osi");
addOption(document.drop_list.SubCat3,"Oye", "Oye");
addOption(document.drop_list.SubCat3,"Ikole", "Ikole");
addOption(document.drop_list.SubCat3,"Moba", "Moba");
addOption(document.drop_list.SubCat3,"Gbonyin", "Gbonyin");
addOption(document.drop_list.SubCat3,"Efon", "Efon");
addOption(document.drop_list.SubCat3,"Ise/Orun", "Ise/Orun");
addOption(document.drop_list.SubCat3,"Ilejemeje", "Ilejemeje");
}

if(document.drop_list.State.value == 'Enugu')
{
addOption(document.drop_list.SubCat3,"Enugu South", "Enugu South");
addOption(document.drop_list.SubCat3,"Igbo-Eze South", "Igbo-Eze South");
addOption(document.drop_list.SubCat3,"Enugu North", "Enugu North");
addOption(document.drop_list.SubCat3,"Nkanu", "Nkanu");
addOption(document.drop_list.SubCat3,"Udi Agwu", "Udi Agwu");
addOption(document.drop_list.SubCat3,"Oji-River", "Oji-River");
addOption(document.drop_list.SubCat3,"Ezeagu", "Ezeagu");
addOption(document.drop_list.SubCat3,"Igbo Eze-North", "Igbo Eze-North");
addOption(document.drop_list.SubCat3,"Isi-Uzo", "Isi-Uzo");
addOption(document.drop_list.SubCat3,"Nsukka", "Nsukka");
addOption(document.drop_list.SubCat3,"Igbo-Ekiti", "Igbo-Ekiti");
addOption(document.drop_list.SubCat3,"Uzo-Uwani", "Uzo-Uwani");
addOption(document.drop_list.SubCat3,"Enugu East", "Enugu East");
addOption(document.drop_list.SubCat3,"Aninri", "Aninri");
addOption(document.drop_list.SubCat3,"Nkanu East", "Nkanu East");
addOption(document.drop_list.SubCat3,"Udenu", "Udenu");
}

if(document.drop_list.State.value == 'Gombe')
{
addOption(document.drop_list.SubCat3,"Akko", "Akko");
addOption(document.drop_list.SubCat3,"Balanga", "Balanga");
addOption(document.drop_list.SubCat3,"Billiri", "Billiri");
addOption(document.drop_list.SubCat3,"Dukku", "Dukku");
addOption(document.drop_list.SubCat3,"Kaltungo", "Kaltungo");
addOption(document.drop_list.SubCat3,"Kwami", "Kwami");
addOption(document.drop_list.SubCat3,"Shomgom", "Shomgom");
addOption(document.drop_list.SubCat3,"Funakaye", "Funakaye");
addOption(document.drop_list.SubCat3,"Gombe", "Gombe");
addOption(document.drop_list.SubCat3,"Nafada/Bajoga", "Nafada/Bajoga");
addOption(document.drop_list.SubCat3,"Yamaltu/Delta", "Yamaltu/Delta");
}

if(document.drop_list.State.value == 'Imo')
{
addOption(document.drop_list.SubCat3,"Aboh-Mbaise", "Aboh-Mbaise");
addOption(document.drop_list.SubCat3,"Ahiazu-Mbaise", "Ahiazu-Mbaise");
addOption(document.drop_list.SubCat3,"Ehime-Mbano", "Ehime-Mbano");
addOption(document.drop_list.SubCat3,"Ezinihitte", "Ezinihitte");
addOption(document.drop_list.SubCat3,"Ideato-North", "Ideato-North");
addOption(document.drop_list.SubCat3,"Ideato-South", "Ideato-South");
addOption(document.drop_list.SubCat3,"Ihitte/Uboma", "Ihitte/Uboma");
addOption(document.drop_list.SubCat3,"Ikeduru", "Ikeduru");
addOption(document.drop_list.SubCat3,"Isiala Mbano", "Isiala Mbano");
addOption(document.drop_list.SubCat3,"Isu", "Isu");
addOption(document.drop_list.SubCat3,"Mbaitolli", "Mbaitolli");
addOption(document.drop_list.SubCat3,"Ngor-Okpala", "Ngor-Okpala");
addOption(document.drop_list.SubCat3,"Njaba", "Njaba");
addOption(document.drop_list.SubCat3,"Nwangele", "Nwangele");
addOption(document.drop_list.SubCat3,"Nkwerre", "Nkwerre");
addOption(document.drop_list.SubCat3,"Obowo", "Obowo");
addOption(document.drop_list.SubCat3,"Oguta", "Oguta");
addOption(document.drop_list.SubCat3,"Ohaji/Egbema", "Ohaji/Egbema");
addOption(document.drop_list.SubCat3,"Okigwe", "Okigwe");
addOption(document.drop_list.SubCat3,"Orlu", "Orlu");
addOption(document.drop_list.SubCat3,"Orsu", "Orsu");
addOption(document.drop_list.SubCat3,"Oru East", "Oru East");
addOption(document.drop_list.SubCat3,"Oru West", "Oru West");
addOption(document.drop_list.SubCat3,"Owerri-Municipal", "Owerri-Municipal");
addOption(document.drop_list.SubCat3,"Owerri-North", "Owerri-North");
addOption(document.drop_list.SubCat3,"Owerri-West", "Owerri-West");
}

if(document.drop_list.State.value == 'Jigawa')
{
addOption(document.drop_list.SubCat3,"Auyo", "Auyo");
addOption(document.drop_list.SubCat3,"Babura", "Babura");
addOption(document.drop_list.SubCat3,"Birni Kudu", "Birni Kudu");
addOption(document.drop_list.SubCat3,"Birniwa", "Birniwa");
addOption(document.drop_list.SubCat3,"Buji", "Buji");
addOption(document.drop_list.SubCat3,"Dutse", "Dutse");
addOption(document.drop_list.SubCat3,"Gagarawa", "Gagarawa");
addOption(document.drop_list.SubCat3,"Garki", "Garki");
addOption(document.drop_list.SubCat3,"Gumel", "Gumel");
addOption(document.drop_list.SubCat3,"Guri", "Guri");
addOption(document.drop_list.SubCat3,"Gwaram", "Gwaram");
addOption(document.drop_list.SubCat3,"Gwiwa", "Gwiwa");
addOption(document.drop_list.SubCat3,"Hadejia", "hadejia");
addOption(document.drop_list.SubCat3,"Jahun", "Jahun");
addOption(document.drop_list.SubCat3,"Kafin Hausa", "Nkwerre");
addOption(document.drop_list.SubCat3,"Kaugama Kazaure", "Kaugama Kazaure");
addOption(document.drop_list.SubCat3,"Kiri Kasamma", "Kiri Kasamma");
addOption(document.drop_list.SubCat3,"Kiyawa", "Kiyawa");
addOption(document.drop_list.SubCat3,"Maigatari", "Maigatari");
addOption(document.drop_list.SubCat3,"Malam Madori", "Malam Madori");
addOption(document.drop_list.SubCat3,"Miga", "Miga");
addOption(document.drop_list.SubCat3,"Ringim", "Ringim");
addOption(document.drop_list.SubCat3,"Roni", "Roni");
addOption(document.drop_list.SubCat3,"Sule-Tankarkar", "Sule-Tankarkar");
addOption(document.drop_list.SubCat3,"Taura", "Taura");
addOption(document.drop_list.SubCat3,"Yankwashi", "Yankwashi");
}

if(document.drop_list.State.value == 'Kaduna')
{
addOption(document.drop_list.SubCat3,"Birni-Gwari", "Birni-Gwari");
addOption(document.drop_list.SubCat3,"Chikun", "Chikun");
addOption(document.drop_list.SubCat3,"Giwa", "Giwa");
addOption(document.drop_list.SubCat3,"Igabi", "Igabi");
addOption(document.drop_list.SubCat3,"Ikara", "Ikara");
addOption(document.drop_list.SubCat3,"Jaba", "Jaba");
addOption(document.drop_list.SubCat3,"Jema&acute;a", "Jema'a");
addOption(document.drop_list.SubCat3,"Kachia", "Kachia");
addOption(document.drop_list.SubCat3,"Kaduna North", "Kaduna North");
addOption(document.drop_list.SubCat3,"Kaduna South", "Kaduna South");
addOption(document.drop_list.SubCat3,"Kagarko", "Kagarko");
addOption(document.drop_list.SubCat3,"Kajuru", "Kajuru");
addOption(document.drop_list.SubCat3,"Kaura", "Kaura");
addOption(document.drop_list.SubCat3,"Kubau", "Kubau");
addOption(document.drop_list.SubCat3,"Kudan", "Kudan");
addOption(document.drop_list.SubCat3,"Lere", "Lere");
addOption(document.drop_list.SubCat3,"Makarfi", "Makarfi");
addOption(document.drop_list.SubCat3,"Sabon-Gari", "Sabon-Gari");
addOption(document.drop_list.SubCat3,"Sanga", "Sanga");
addOption(document.drop_list.SubCat3,"Soba", "Soba");
addOption(document.drop_list.SubCat3,"Zango-Kataf", "Zango-Kataf");
addOption(document.drop_list.SubCat3,"Zaria", "Zaria");
}

if(document.drop_list.State.value == 'Kano')
{
addOption(document.drop_list.SubCat3,"Ajingi", "Ajingi");
addOption(document.drop_list.SubCat3,"Albasu", "Albasu");
addOption(document.drop_list.SubCat3,"Bagwai", "Bagwai");
addOption(document.drop_list.SubCat3,"Bebeji", "Bebeji");
addOption(document.drop_list.SubCat3,"Bichi", "Bichi");
addOption(document.drop_list.SubCat3,"Bunkure", "Bunkure");
addOption(document.drop_list.SubCat3,"Dala", "Dala");
addOption(document.drop_list.SubCat3,"Dambatta", "Dambatta");
addOption(document.drop_list.SubCat3,"Dawakin Kudu", "Dawakin Kudu");
addOption(document.drop_list.SubCat3,"Dawakin Tofa", "Dawakin Tofa");
addOption(document.drop_list.SubCat3,"Doguwa", "Doguwa");
addOption(document.drop_list.SubCat3,"Fagge", "Fagge");
addOption(document.drop_list.SubCat3,"Gabasawa", "Gabasawa");
addOption(document.drop_list.SubCat3,"Garko", "Garko");
addOption(document.drop_list.SubCat3,"Garum", "Garum");
addOption(document.drop_list.SubCat3,"Mallam", "Mallam");
addOption(document.drop_list.SubCat3,"Gaya", "Gaya");
addOption(document.drop_list.SubCat3,"Gezawa", "Gezawa");
addOption(document.drop_list.SubCat3,"Gwale", "Gwale");
addOption(document.drop_list.SubCat3,"Gwarzo", "Gwarzo");
addOption(document.drop_list.SubCat3,"Kabo", "Kabo");
addOption(document.drop_list.SubCat3,"Kano Municipal", "Kano Municipal");
addOption(document.drop_list.SubCat3,"Karaye", "Karaye");
addOption(document.drop_list.SubCat3,"Kibiya", "Kibiya");
addOption(document.drop_list.SubCat3,"Kiru", "Kiru");
addOption(document.drop_list.SubCat3,"Kumbotso", "Kumbotso");
addOption(document.drop_list.SubCat3,"Kunchi", "Kunchi");
addOption(document.drop_list.SubCat3,"Kura", "Kura");
addOption(document.drop_list.SubCat3,"Madobi", "Madobi");
addOption(document.drop_list.SubCat3,"Makoda", "Makoda");
addOption(document.drop_list.SubCat3,"Minjibir", "Minjibir");
addOption(document.drop_list.SubCat3,"Nasarawa", "Nasarawa");
addOption(document.drop_list.SubCat3,"Rano", "Rano");
addOption(document.drop_list.SubCat3,"Rimin Gado", "Rimin Gado");
addOption(document.drop_list.SubCat3,"Rogo", "Rogo");
addOption(document.drop_list.SubCat3,"Shanono", "Shanono");
addOption(document.drop_list.SubCat3,"Sumaila", "Sumaila");
addOption(document.drop_list.SubCat3,"Takali", "Takali");
addOption(document.drop_list.SubCat3,"Tarauni", "Tarauni");
addOption(document.drop_list.SubCat3,"Tofa", "Tofa");
addOption(document.drop_list.SubCat3,"Tsanyawa", "Tsanyawa");
addOption(document.drop_list.SubCat3,"Tudun Wada", "Tudun Wada");
addOption(document.drop_list.SubCat3,"Ungogo", "Ungogo");
addOption(document.drop_list.SubCat3,"Warawa", "Warawa");
addOption(document.drop_list.SubCat3,"Wudil", "Wudil");
}

if(document.drop_list.State.value == 'Katsina')
{
addOption(document.drop_list.SubCat3,"Bakori", "Bakori");
addOption(document.drop_list.SubCat3,"Batagarawa", "Batagarawa");
addOption(document.drop_list.SubCat3,"Batsari", "Batsari");
addOption(document.drop_list.SubCat3,"Baure", "Baure");
addOption(document.drop_list.SubCat3,"Bindawa", "Bindawa");
addOption(document.drop_list.SubCat3,"Charanchi", "Chranchi");
addOption(document.drop_list.SubCat3,"Dandume", "Dandume");
addOption(document.drop_list.SubCat3,"Danja", "Danja");
addOption(document.drop_list.SubCat3,"Dan Musa", "Dan Musa");
addOption(document.drop_list.SubCat3,"Daura", "Daura");
addOption(document.drop_list.SubCat3,"Dutsi", "Dutsi");
addOption(document.drop_list.SubCat3,"Dutsin-Ma", "Dutsin-Ma");
addOption(document.drop_list.SubCat3,"Faskari", "Faskari");
addOption(document.drop_list.SubCat3,"Funtua", "Funtua");
addOption(document.drop_list.SubCat3,"Ingawa", "Ingawa");
addOption(document.drop_list.SubCat3,"Jibia", "Jibia");
addOption(document.drop_list.SubCat3,"Kafur", "Kafur");
addOption(document.drop_list.SubCat3,"Kaita", "Kaita");
addOption(document.drop_list.SubCat3,"Kankara", "Kankara");
addOption(document.drop_list.SubCat3,"Kankia", "Kankia");
addOption(document.drop_list.SubCat3,"Katsina", "Katsina");
addOption(document.drop_list.SubCat3,"Kurfi", "Kurfi");
addOption(document.drop_list.SubCat3,"Kusada", "Kusada");
addOption(document.drop_list.SubCat3,"Mai'adua", "Mai'adua");
addOption(document.drop_list.SubCat3,"Malumfashi", "Malumfashi");
addOption(document.drop_list.SubCat3,"Mani", "Mani");
addOption(document.drop_list.SubCat3,"Mashi", "Mashi");
addOption(document.drop_list.SubCat3,"Matazuu", "Matazuu");
addOption(document.drop_list.SubCat3,"Musawa", "Musawa");
addOption(document.drop_list.SubCat3,"Makoda", "Makoda");
addOption(document.drop_list.SubCat3,"Rimi", "Rimi");
addOption(document.drop_list.SubCat3,"Sabuwa", "Sabuwa");
addOption(document.drop_list.SubCat3,"Safana", "Safana");
addOption(document.drop_list.SubCat3,"Sandamu", "Sandamu");
addOption(document.drop_list.SubCat3,"Zango", "Zango");
}

if(document.drop_list.State.value == 'Kebbi')
{
addOption(document.drop_list.SubCat3,"Aliero", "Aliero");
addOption(document.drop_list.SubCat3,"Arewa-Dandi", "Arewa-Dandi");
addOption(document.drop_list.SubCat3,"Argungu", "Argungu");
addOption(document.drop_list.SubCat3,"Augie", "Augie");
addOption(document.drop_list.SubCat3,"Bagudo", "Bagudo");
addOption(document.drop_list.SubCat3,"Birnin Kebbi", "Birnin Kebbi");
addOption(document.drop_list.SubCat3,"Bunza", "Bunza");
addOption(document.drop_list.SubCat3,"Dandi", "Dandi");
addOption(document.drop_list.SubCat3,"Fakai", "Fakai");
addOption(document.drop_list.SubCat3,"Gwandu", "Gwandu");
addOption(document.drop_list.SubCat3,"Jega", "Jega");
addOption(document.drop_list.SubCat3,"Kalgo", "Kalgo");
addOption(document.drop_list.SubCat3,"Koko/Besse", "Koko/Besse");
addOption(document.drop_list.SubCat3,"Maiyama", "Maiyama");
addOption(document.drop_list.SubCat3,"Ngaski", "Ngaski");
addOption(document.drop_list.SubCat3,"Sakaba", "Sakaba");
addOption(document.drop_list.SubCat3,"Shanga", "Shanga");
addOption(document.drop_list.SubCat3,"Suru", "Suru");
addOption(document.drop_list.SubCat3,"Wasagu/Danko", "Wasgau/Danko");
addOption(document.drop_list.SubCat3,"Yauri", "Yauri");
addOption(document.drop_list.SubCat3,"Zuru", "Zuru");
}

if(document.drop_list.State.value == 'Kogi')
{
addOption(document.drop_list.SubCat3,"Adavi", "Adavi");
addOption(document.drop_list.SubCat3,"Ajaokuta", "Ajaokuta");
addOption(document.drop_list.SubCat3,"Ankpa", "Ankpa");
addOption(document.drop_list.SubCat3,"Bassa", "Bassa");
addOption(document.drop_list.SubCat3,"Dekina", "Dekina");
addOption(document.drop_list.SubCat3,"Ibaji", "Ibaji");
addOption(document.drop_list.SubCat3,"Idah", "Idah");
addOption(document.drop_list.SubCat3,"Igalamela-Odolu", "Igalamela-Odolu");
addOption(document.drop_list.SubCat3,"Ijumu", "Ijumu");
addOption(document.drop_list.SubCat3,"Kabba/Bunu", "Kabba/Bunu");
addOption(document.drop_list.SubCat3,"Kogi", "Kogi");
addOption(document.drop_list.SubCat3,"Lokoja", "Lokoja");
addOption(document.drop_list.SubCat3,"Mopa-Muro", "Mopa-Muro");
addOption(document.drop_list.SubCat3,"Ofu", "Ofu");
addOption(document.drop_list.SubCat3,"Ogori/Mangongo", "Ogori/Mangongo");
addOption(document.drop_list.SubCat3,"Okehi", "Okehi");
addOption(document.drop_list.SubCat3,"Okene", "Okene");
addOption(document.drop_list.SubCat3,"Olamabolo", "Olamabolo");
addOption(document.drop_list.SubCat3,"Omala", "Omala");
addOption(document.drop_list.SubCat3,"Yagba East", "Yagba East");
addOption(document.drop_list.SubCat3,"Yagba West", "Yagba West");
}

if(document.drop_list.State.value == 'Kwara')
{
addOption(document.drop_list.SubCat3,"Asa", "Asa");
addOption(document.drop_list.SubCat3,"Baruten", "Baruten");
addOption(document.drop_list.SubCat3,"Edu", "Edu");
addOption(document.drop_list.SubCat3,"Ekiti", "Ekiti");
addOption(document.drop_list.SubCat3,"Ifelodun", "Ifelodun");
addOption(document.drop_list.SubCat3,"Ilorin East", "Ilorin East");
addOption(document.drop_list.SubCat3,"Ilorin West", "Ilorin West");
addOption(document.drop_list.SubCat3, "Ilorin South", "Ilorin South");
addOption(document.drop_list.SubCat3,"Irepodun", "Irepodun");
addOption(document.drop_list.SubCat3,"Isin", "Isin");
addOption(document.drop_list.SubCat3,"Kaiama", "Kaiama");
addOption(document.drop_list.SubCat3,"Moro", "Moro");
addOption(document.drop_list.SubCat3,"Offa", "Offa");
addOption(document.drop_list.SubCat3,"Oke-Ero", "Oke-Ero");
addOption(document.drop_list.SubCat3,"Oyun", "Oyun");
addOption(document.drop_list.SubCat3,"Pategi", "Pategi");
}

if(document.drop_list.State.value == 'Lagos')
{
addOption(document.drop_list.SubCat3,"Agege", "Agege");
addOption(document.drop_list.SubCat3,"Ajeromi-Ifelodun", "Ajeromi-Ifelodun");
addOption(document.drop_list.SubCat3,"Alimosho", "Alimosho");
addOption(document.drop_list.SubCat3,"Amuwo-Odofin", "Amuwo-Odofin");
addOption(document.drop_list.SubCat3,"Apapa", "Apapa");
addOption(document.drop_list.SubCat3,"Badagry", "Badagry");
addOption(document.drop_list.SubCat3,"Epe", "Epe");
addOption(document.drop_list.SubCat3,"Eti-Osa", "Eti-Osa");
addOption(document.drop_list.SubCat3,"Ibeju/Lekki", "Ibeju/Lekki");
addOption(document.drop_list.SubCat3,"Ifako-Ijaye", "Ifako-Ijaye");
addOption(document.drop_list.SubCat3,"Ikeja", "Ikeja");
addOption(document.drop_list.SubCat3,"Ikorodu", "Ikorodu");
addOption(document.drop_list.SubCat3,"Kosofe", "Kosofe");
addOption(document.drop_list.SubCat3,"Lagos Island", "Lagos Island");
addOption(document.drop_list.SubCat3,"Lagos Mainland", "Lagos Mainland");
addOption(document.drop_list.SubCat3,"Mushin", "Mushin");
addOption(document.drop_list.SubCat3,"Ojo", "Ojo");
addOption(document.drop_list.SubCat3,"Oshodi-Isolo", "Oshodi-Isolo");
addOption(document.drop_list.SubCat3,"Shomolu", "Shomolu");
addOption(document.drop_list.SubCat3,"Surulere", "Surulere");
}

if(document.drop_list.State.value == 'Nassarawa')
{
addOption(document.drop_list.SubCat3,"Akwanga", "Akwanga");
addOption(document.drop_list.SubCat3,"Awe", "Awe");
addOption(document.drop_list.SubCat3,"Doma", "Doma");
addOption(document.drop_list.SubCat3,"Karu", "Karu");
addOption(document.drop_list.SubCat3,"Keana", "Keana");
addOption(document.drop_list.SubCat3,"Keffi", "Keffi");
addOption(document.drop_list.SubCat3,"Kokona", "Kokona");
addOption(document.drop_list.SubCat3,"Lafia", "Lafia");
addOption(document.drop_list.SubCat3,"Nassarawa", "Nassarawa");
addOption(document.drop_list.SubCat3,"Nassarawa-Eggon", "Nassarawa-Eggon");
addOption(document.drop_list.SubCat3,"Obi", "Obi");
addOption(document.drop_list.SubCat3,"Toto", "Toto");
addOption(document.drop_list.SubCat3,"Wamba", "Wamba");
}

if(document.drop_list.State.value == 'Niger')
{
addOption(document.drop_list.SubCat3,"Agaie", "Agaie");
addOption(document.drop_list.SubCat3,"Agwara", "Agwara");
addOption(document.drop_list.SubCat3,"Bida", "Bida");
addOption(document.drop_list.SubCat3,"Borgu", "Borgu");
addOption(document.drop_list.SubCat3,"Bosso", "Bosso");
addOption(document.drop_list.SubCat3,"Chanchaga", "Chanchaga");
addOption(document.drop_list.SubCat3,"Edati", "Edati");
addOption(document.drop_list.SubCat3,"Gbako", "Gbako");
addOption(document.drop_list.SubCat3,"Gurara", "Gurara");
addOption(document.drop_list.SubCat3,"Katcha", "Katcha");
addOption(document.drop_list.SubCat3,"Kontagora", "Kontagora");
addOption(document.drop_list.SubCat3,"Lapai", "Lapai");
addOption(document.drop_list.SubCat3,"Lavun", "Lavun");
addOption(document.drop_list.SubCat3,"Magama", "Magama");
addOption(document.drop_list.SubCat3,"Mariga", "Mariga");
addOption(document.drop_list.SubCat3,"Mashegu", "Mashegu");
addOption(document.drop_list.SubCat3,"Mokwa", "Mokwa");
addOption(document.drop_list.SubCat3,"Muya", "Muya");
addOption(document.drop_list.SubCat3,"Pailoro", "Pailoro");
addOption(document.drop_list.SubCat3,"Rafi", "Rafi");
addOption(document.drop_list.SubCat3,"Rijau", "Rijau");
addOption(document.drop_list.SubCat3,"Shiroro", "Shiroro");
addOption(document.drop_list.SubCat3,"Suleja", "Suleja");
addOption(document.drop_list.SubCat3,"Tafa", "Tafa");
addOption(document.drop_list.SubCat3,"Wushishi", "Wushishi");
}

if(document.drop_list.State.value == 'Ogun')
{
addOption(document.drop_list.SubCat3,"Abeokuta-North", "Abeokuta-North");
addOption(document.drop_list.SubCat3,"Abeokuta-South", "Abeokuta-South");
addOption(document.drop_list.SubCat3,"Ado-Odo/Ota", "Ado-Odo/Ota");
addOption(document.drop_list.SubCat3,"Egbado-North", "Egbado-North");
addOption(document.drop_list.SubCat3,"Egbado-South", "Egbado-South");
addOption(document.drop_list.SubCat3,"Ewekoro", "Ewekoro");
addOption(document.drop_list.SubCat3,"Ifo", "Ifo");
addOption(document.drop_list.SubCat3,"Ijebu-East", "Ijebu-East");
addOption(document.drop_list.SubCat3,"Ijebu-North", "Ijebu-North");
addOption(document.drop_list.SubCat3,"Ijebu North-East", "Ijebu North-East");
addOption(document.drop_list.SubCat3,"Ijebu Ode", "Ijebu Ode");
addOption(document.drop_list.SubCat3,"Ikenne", "Ikenne");
addOption(document.drop_list.SubCat3,"Imeko-Afon", "Imeko-Afon");
addOption(document.drop_list.SubCat3,"Ipokia", "Ipokia");
addOption(document.drop_list.SubCat3,"Obafemi-Owode", "Obafemi-Owode");
addOption(document.drop_list.SubCat3,"Ogun Waterside", "Ogun Waterside");
addOption(document.drop_list.SubCat3,"Odeda", "Odeda");
addOption(document.drop_list.SubCat3,"Odogbolu", "Odogbolu");
addOption(document.drop_list.SubCat3,"Remo North", "Remo North");
addOption(document.drop_list.SubCat3,"Shagamu", "Shagamu");
}

if(document.drop_list.State.value == 'Ondo')
{
addOption(document.drop_list.SubCat3,"Akoko North East", "Akoko North East");
addOption(document.drop_list.SubCat3,"Akoko North West", "Akoko North West");
addOption(document.drop_list.SubCat3,"Akoko South East", "Akoko South East");
addOption(document.drop_list.SubCat3,"Akoko South West", "Akoko South West");
addOption(document.drop_list.SubCat3,"Akure North", "Akure North");
addOption(document.drop_list.SubCat3,"Akure South", "Akure South");
addOption(document.drop_list.SubCat3,"Ese-Odo", "Ese-Odo");
addOption(document.drop_list.SubCat3,"Idanre", "Idanre");
addOption(document.drop_list.SubCat3,"Ifedore", "Ifedore");
addOption(document.drop_list.SubCat3,"Ilaje", "Ilaje");
addOption(document.drop_list.SubCat3,"Ile-Oluji", "Ile-Oluji");
addOption(document.drop_list.SubCat3,"Okeigbo", "Okeigbo");
addOption(document.drop_list.SubCat3,"Irele", "Irele");
addOption(document.drop_list.SubCat3,"Odigbo", "Odigbo");
addOption(document.drop_list.SubCat3,"Okitipupa", "Okitipupa");
addOption(document.drop_list.SubCat3,"Ondo East", "Ondo East");
addOption(document.drop_list.SubCat3,"Ondo West", "Ondo West");
addOption(document.drop_list.SubCat3,"Ose", "Ose");
addOption(document.drop_list.SubCat3,"Owo", "Owo");
}

if(document.drop_list.State.value == 'Osun')
{
addOption(document.drop_list.SubCat3,"Aiyedade", "Aiyedade");
addOption(document.drop_list.SubCat3,"Aiyedire", "Aiyedire");
addOption(document.drop_list.SubCat3,"Atakumosa East", "Atakumosa East");
addOption(document.drop_list.SubCat3,"Atakumosa West", "Atakumosa West");
addOption(document.drop_list.SubCat3,"Boluwaduro", "Boluwaduro");
addOption(document.drop_list.SubCat3,"Boripe", "Boripe");
addOption(document.drop_list.SubCat3,"Ede North", "Ede North");
addOption(document.drop_list.SubCat3,"Ede South", "Ede South");
addOption(document.drop_list.SubCat3,"Egbedore", "Egbedore");
addOption(document.drop_list.SubCat3,"Ejigbo", "Ejigbo");
addOption(document.drop_list.SubCat3,"Ife Central", "Ife Central");
addOption(document.drop_list.SubCat3,"Ife East", "Ife East");
addOption(document.drop_list.SubCat3,"Ife North", "Ife North");
addOption(document.drop_list.SubCat3,"Ife South", "Ife South");
addOption(document.drop_list.SubCat3,"Ifedayo", "Ifedayo");
addOption(document.drop_list.SubCat3,"Ifelodun", "Ifelodun");
addOption(document.drop_list.SubCat3,"Ila", "Ila");
addOption(document.drop_list.SubCat3,"Ilesha East", "Ilesha East");
addOption(document.drop_list.SubCat3,"Ilesha West", "Ilesha West");
addOption(document.drop_list.SubCat3,"Irepodun", "Irepodun");
addOption(document.drop_list.SubCat3,"Irewole", "Irewole");
addOption(document.drop_list.SubCat3,"Isokan", "Isokan");
addOption(document.drop_list.SubCat3,"Iwo", "Iwo");
addOption(document.drop_list.SubCat3,"Obokun", "Obokun");
addOption(document.drop_list.SubCat3,"Odo-Otin", "Odo-Otin");
addOption(document.drop_list.SubCat3,"Ola-Oluwa", "Ola-Oluwa");
addOption(document.drop_list.SubCat3,"Olorunda", "Olorunda");
addOption(document.drop_list.SubCat3,"Oriade", "Oriade");
addOption(document.drop_list.SubCat3,"Orolu", "Orolu");
addOption(document.drop_list.SubCat3,"Osogbo", "Osogbo");
}

if(document.drop_list.State.value == 'Oyo')
{
addOption(document.drop_list.SubCat3,"Afijio", "Afijio");
addOption(document.drop_list.SubCat3,"Akinyele", "Akinyele");
addOption(document.drop_list.SubCat3,"Atiba", "Atiba");
addOption(document.drop_list.SubCat3,"Atigbo", "Atigbo");
addOption(document.drop_list.SubCat3,"Egbeda", "Egbeda");
addOption(document.drop_list.SubCat3,"Ibadan Central", "Ibadan Central");
addOption(document.drop_list.SubCat3,"Ibadan North", "Ibadan North");
addOption(document.drop_list.SubCat3,"Ibadan North West", "Ibadan North West");
addOption(document.drop_list.SubCat3,"Ibadan South East", "Ibadan South East");
addOption(document.drop_list.SubCat3,"Ibadan South West", "Ibadan South West");
addOption(document.drop_list.SubCat3,"Ibarapa East", "Ibarapa East");
addOption(document.drop_list.SubCat3,"Ibarapa North", "Ibarapa North");
addOption(document.drop_list.SubCat3,"Ido", "Ido");
addOption(document.drop_list.SubCat3,"Irepo", "Irepo");
addOption(document.drop_list.SubCat3,"Iseyin", "Iseyin");
addOption(document.drop_list.SubCat3,"Itesiwaju", "Itesiwaju");
addOption(document.drop_list.SubCat3,"Iwajowa", "Iwajowa");
addOption(document.drop_list.SubCat3,"Kajola", "Kajola");
addOption(document.drop_list.SubCat3,"Lagelu Ogbomosho North", "Lagelu Ogbomosho North");
addOption(document.drop_list.SubCat3,"Ogbomosho South", "Ogbomosho South");
addOption(document.drop_list.SubCat3,"Ogo Oluwa", "Ogo Oluwa");
addOption(document.drop_list.SubCat3,"Olorunsogo", "Olorunsogo");
addOption(document.drop_list.SubCat3,"Oluyole", "Oluyole");
addOption(document.drop_list.SubCat3,"Ona-Ara", "Ona-Ara");
addOption(document.drop_list.SubCat3,"Orelope", "Orelope");
addOption(document.drop_list.SubCat3,"Ori Ire", "Ori Ire");
addOption(document.drop_list.SubCat3,"Oyo East", "Oyo East");
addOption(document.drop_list.SubCat3,"Oyo West", "Oyo West");
addOption(document.drop_list.SubCat3,"Saki East", "Saki East");
addOption(document.drop_list.SubCat3,"Saki West", "Saki West");
addOption(document.drop_list.SubCat3,"Surulere", "Surulere");
}

if(document.drop_list.State.value == 'Plateau')
{
addOption(document.drop_list.SubCat3,"Barikin Ladi", "Barikin Lado");
addOption(document.drop_list.SubCat3,"Bassa", "Bassa");
addOption(document.drop_list.SubCat3,"Bokkos", "Bokkos");
addOption(document.drop_list.SubCat3,"Jos East", "Jos East");
addOption(document.drop_list.SubCat3,"Jos North", "Jos North");
addOption(document.drop_list.SubCat3,"Jos South", "Jos South");
addOption(document.drop_list.SubCat3,"Kanam", "Kanam");
addOption(document.drop_list.SubCat3,"Kanke", "Kanke");
addOption(document.drop_list.SubCat3,"Langtang North", "Langtang North");
addOption(document.drop_list.SubCat3,"Langtang South", "Langtang South");
addOption(document.drop_list.SubCat3,"Mangu", "Mangu");
addOption(document.drop_list.SubCat3,"Mikang", "Mikang");
addOption(document.drop_list.SubCat3,"Pankshin", "Pankshin");
addOption(document.drop_list.SubCat3,"Qua&acute;an Pan", "Qua'an Pan");
addOption(document.drop_list.SubCat3,"Riyom", "Riyom");
addOption(document.drop_list.SubCat3,"Shendam", "Shendam");
addOption(document.drop_list.SubCat3, "Wase", "Wase");
}

if(document.drop_list.State.value == 'Rivers')
{
addOption(document.drop_list.SubCat3,"Abua/Odual", "Abua/Odual");
addOption(document.drop_list.SubCat3,"Ahoada East", "Ahoada East");
addOption(document.drop_list.SubCat3,"Ahoada West", "Ahoada West");
addOption(document.drop_list.SubCat3,"Akuku Toru", "Akuku Toru");
addOption(document.drop_list.SubCat3,"Andoni", "Andoni");
addOption(document.drop_list.SubCat3,"Asari-Toru", "Asari-Toru");
addOption(document.drop_list.SubCat3,"Bonny", "Bonny");
addOption(document.drop_list.SubCat3,"Degema", "Degema");
addOption(document.drop_list.SubCat3,"Emohua", "Emohua");
addOption(document.drop_list.SubCat3,"Eleme", "Eleme");
addOption(document.drop_list.SubCat3,"Etche", "Etche");
addOption(document.drop_list.SubCat3,"Gokana", "Gokana");
addOption(document.drop_list.SubCat3,"Ikwerre", "Ikwerre");
addOption(document.drop_list.SubCat3,"Khana", "Khana");
addOption(document.drop_list.SubCat3,"Obia/Akpor", "Obia/Akpor");
addOption(document.drop_list.SubCat3,"Ogba/Egbema/Ndoni", "Ogba/Egbema/Ndoni");
addOption(document.drop_list.SubCat3,"Ogu/Bolo", "Ogu/Bolo");
addOption(document.drop_list.SubCat3,"Okrika", "Okrika");
addOption(document.drop_list.SubCat3,"Omumma", "Omumma");
addOption(document.drop_list.SubCat3,"Opobo/Nkoro", "Opobo/Nkoro");
addOption(document.drop_list.SubCat3,"Oyigbo", "Oyigbo");
addOption(document.drop_list.SubCat3,"Port-Harcourt", "Port-Harcourt");
addOption(document.drop_list.SubCat3,"Tai", "Tai");
}

if(document.drop_list.State.value == 'Sokoto')
{
addOption(document.drop_list.SubCat3,"Binji", "Binji");
addOption(document.drop_list.SubCat3,"Bodinga", "Bodinga");
addOption(document.drop_list.SubCat3,"Dange-Shuni", "Dange-Shuni");
addOption(document.drop_list.SubCat3,"Gada", "Gada");
addOption(document.drop_list.SubCat3,"Goronyo", "Goronyo");
addOption(document.drop_list.SubCat3,"Gudu", "Gudu");
addOption(document.drop_list.SubCat3,"Gwadabawa", "Gwadabawa");
addOption(document.drop_list.SubCat3,"Illela", "Illela");
addOption(document.drop_list.SubCat3,"Isa", "Isa");
addOption(document.drop_list.SubCat3,"Kware", "Kware");
addOption(document.drop_list.SubCat3,"Kebbe", "Kebbe");
addOption(document.drop_list.SubCat3,"Rabah", "Rabah");
addOption(document.drop_list.SubCat3,"Sabon Birni", "Sabon Birni");
addOption(document.drop_list.SubCat3,"Shagari", "Shagari");
addOption(document.drop_list.SubCat3,"Silame", "Silame");
addOption(document.drop_list.SubCat3,"Sokoto North", "Sokoto North");
addOption(document.drop_list.SubCat3,"Sokoto South", "Sokoto South");
addOption(document.drop_list.SubCat3,"Tambuwal", "Tambuwal");
addOption(document.drop_list.SubCat3,"Tangaza", "Tangaza");
addOption(document.drop_list.SubCat3,"Tureta", "Tureta");
addOption(document.drop_list.SubCat3,"Wamako", "Wamako");
addOption(document.drop_list.SubCat3,"Wurno", "Wurno");
addOption(document.drop_list.SubCat3,"Yabo", "Yabo");
}

if(document.drop_list.State.value == 'Taraba')
{
addOption(document.drop_list.SubCat3,"Ardo-Kola", "Ardo-Kola");
addOption(document.drop_list.SubCat3,"Bali", "Bali");
addOption(document.drop_list.SubCat3,"Donga", "Donga");
addOption(document.drop_list.SubCat3,"Gashaka", "Gashaka");
addOption(document.drop_list.SubCat3,"Cassol", "Cassol");
addOption(document.drop_list.SubCat3,"Ibi", "Ibi");
addOption(document.drop_list.SubCat3,"Jalingo", "Jalingo");
addOption(document.drop_list.SubCat3,"Karin-Lamido", "Karin-Lamido");
addOption(document.drop_list.SubCat3,"Kurmi", "Kurmi");
addOption(document.drop_list.SubCat3,"Lau", "Lau");
addOption(document.drop_list.SubCat3,"Sardauna", "Sardauna");
addOption(document.drop_list.SubCat3,"Takum", "Takum");
addOption(document.drop_list.SubCat3,"Ussa", "Ussa");
addOption(document.drop_list.SubCat3,"Wukari", "Wukari");
addOption(document.drop_list.SubCat3,"Yorro", "Yorro");
addOption(document.drop_list.SubCat3,"Zing", "Zing");
}

if(document.drop_list.State.value == 'Yobe')
{
addOption(document.drop_list.SubCat3,"Bade", "Bade");
addOption(document.drop_list.SubCat3,"Bursai", "Bursai");
addOption(document.drop_list.SubCat3,"Damaturu", "Damaturu");
addOption(document.drop_list.SubCat3,"Fika", "Fika");
addOption(document.drop_list.SubCat3,"Fune", "Fune");
addOption(document.drop_list.SubCat3,"Geidam", "Geidam");
addOption(document.drop_list.SubCat3,"Gujba", "Gujba");
addOption(document.drop_list.SubCat3,"Gulani", "Gulani");
addOption(document.drop_list.SubCat3,"Jakusko", "Jakusko");
addOption(document.drop_list.SubCat3,"Kasaruwa", "Kasaruwa");
addOption(document.drop_list.SubCat3,"Karawa", "Karawa");
addOption(document.drop_list.SubCat3,"Machina", "Machina");
addOption(document.drop_list.SubCat3,"Nangere", "Nangere");
addOption(document.drop_list.SubCat3,"Nguru Potiskum", "Nguru Potiskum");
addOption(document.drop_list.SubCat3,"Tarmua", "Tarmua");
addOption(document.drop_list.SubCat3,"Yunusari", "Yunusari");
addOption(document.drop_list.SubCat3,"Yusufari", "Yusufari");
}

if(document.drop_list.State.value == 'Zamfara')
{
addOption(document.drop_list.SubCat3,"Anka", "Anka");
addOption(document.drop_list.SubCat3,"Bakura", "Bakura");
addOption(document.drop_list.SubCat3,"Birnin Magaji", "Birnin Magaji");
addOption(document.drop_list.SubCat3,"Bukkuyum", "Bukkuyum");
addOption(document.drop_list.SubCat3,"Bungudu", "Bungudu");
addOption(document.drop_list.SubCat3,"Gummi", "Gummi");
addOption(document.drop_list.SubCat3,"Gusau", "Gusua");
addOption(document.drop_list.SubCat3,"Kaura", "Kaura");
addOption(document.drop_list.SubCat3,"Namoda", "Namoda");
addOption(document.drop_list.SubCat3,"Maradun", "Maradun");
addOption(document.drop_list.SubCat3,"Maru", "Maru");
addOption(document.drop_list.SubCat3,"Shinkafi", "Shinkafi");
addOption(document.drop_list.SubCat3,"Talata Mafara", "Talata Mafara");
addOption(document.drop_list.SubCat3,"Tsafe", "Tsafe");
addOption(document.drop_list.SubCat3,"Zurmi", "Zurmi");
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
