

initDataDesain();
initDataHome();
function initDataDesain(){
    $.ajax({
        type:"GET",
        url: "../desain/getdata",
        dataType:"json",
        success: function(response){
      
         let resultdata = response.data;
         var content="";
    
        if(resultdata.length === 0){
            content=`  
            <div class="col-12 text-center">
                <h6>data belum ada</h6>
            </div>`
        }else{
            $.each(resultdata,(index,row)=>{
             
                const nama = row.nama;
                const imgbg = row.imgbg;
                const caption = row.deskripsi;
                const views = row.views;
    
                content += `
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4 pt-4">
                    <div>
                        <div class="view-wrapper" onmouseover="cardhover(this)" onmouseout="normalImg(this)">
                            <div id="btn-view" class="btn-view-desain-wrap" style="padding: 0px;margin-top: -23px;"><a id="view-before" class="btn btn-view d-none" href="../desain/preview/${nama}/view/${views}"><img class="mr-3" src="../home/assets/img/eye_ic.png" style="width: 17px;height: 12px;" />View themes</a></div><img id="img-content" class="img-desain" src="../storage/${imgbg}" />
                        </div>
                        <div style="margin-top: 45px;">
                        <div class="row">
                            <div class="col-8 col-sm-8 text-left">
                                <p class="text-left" style="font-weight: 700;">${nama}</p>
                            </div>
                            <div class="col-4 col-sm-4">
                                <p class="text-right"><img class="mr-2" src="home/assets/img/ic_eyee_black.svg" /><span style="font-family: Poppins, sans-serif;font-size: 12px;">${views}</span></p>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                `;
             
               
             });
        }
        
         $('#getdesain').append(content)
        }
    })
}


function initDataHome(){
    $.ajax({
        type:"GET",
        url: "../getdatadesain",
        dataType:"json",
        success: function(response){
      
         let resultdata = response.data;
         var content="";
            
        if(resultdata.length === 0){
            content=`  
            <div class="col-12 text-center">
             <h6> data kosong </h6>
            </div>`
        }else{
            $.each(resultdata,(index,row)=>{
             
                const nama = row.nama;
                const imgbg = row.imgbg;
                const views = row.views;
                
                content += `
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-4" data-aos="fade-up" data-aos-duration="900" style="margin-top: 0px;">
                <div>
                    <div class="wrapper-themes"onmouseover="cardhover(this)" onmouseout="normalImg(this)">
                        <div class="btn-wrap-themes"><a class="btn btn-view btn-primary view-themes d-none" role="button" id="btn-themes" href="desain/preview/${nama}/view/${views}"><i class="fa fa-eye mr-2"></i>View themes</a></div><img class="img-desain-home" style="" src="Storage/${imgbg}" loading="lazy">
                        <div class="top-left-content-desain"><img src="home/assets/img/ic_diamond_cover.svg" style="width: 18px;height: 14px;"><span style="color: rgb(255,255,255);">Rekomendasi</span></div>
                    </div>
                    <div class="desain-content">
                    <div class="row">
                        <div class="col-6 text-left p-0">
                            <p class="text-left">${nama}<br /></p>
                        </div>
                        <div class="col-5 p-0">
                            <p class="text-right"><img class="mr-3" src="home/assets/img/ic_eyee_black.svg" style="width: 24px;height: 24px;" /><span>${views}</span></p>
                        </div>
                    </div>
                </div>

                    
                </div>
            </div>
                `;
       
               
             });


        }

         $('#getdesainhome').append(content)
        }
    })
}
function cardhover(x){
     $(x).find(".img-desain").css("filter","brightness(50%)");
     $(x).find(".img-desain-home").css("filter","brightness(50%)");
     $(x).find(".btn-view").removeClass("d-none");
     $(x).find(".btn-view").addClass("d-inline-block");

     
}
function normalImg(x){
 $(x).find(".img-desain").css("filter","brightness(100%)");
 $(x).find(".img-desain-home").css("filter","brightness(100%)");
    $(x).find(".btn-view").removeClass("d-inline-block");
    $(x).find(".btn-view").addClass("d-none");
}
