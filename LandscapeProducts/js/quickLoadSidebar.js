

function quickLoadSidebar(adCat){
  
    $.post(
      '/LandscapeProducts/includes/la-common-sidebar-menu-subcat-loading.inc',
      {adCat: adCat},
       function(data){
         data = JSON.parse(data); 
         $('.panel-body.business').html(data.subCatList);
         console.log(data.subCatList);
       }
    )
  

  
}