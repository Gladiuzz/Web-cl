$(document).ready(function() {
					jQuery("#form-tambah-kategori").validationEngine({
						ignore: ':not(select:hidden, input:visible, textarea:visible)',
						promptPosition : "topRight:-90",
						validateNonVisibleFields: true
					});
					jQuery("#form-edit-kategori").validationEngine({
						ignore: ':not(select:hidden, input:visible, textarea:visible)',
						promptPosition : "topRight:-90",
						validateNonVisibleFields: true
					});

					 jQuery("#form-tambah-clients").validationEngine({
						ignore: ':not(select:hidden, input:visible, textarea:visible)',
						promptPosition : "topRight:-90",
						validateNonVisibleFields: true
					});
					jQuery("#form-edit-clients").validationEngine({
						ignore: ':not(select:hidden, input:visible, textarea:visible)',
						promptPosition : "topRight:-90",
						validateNonVisibleFields: true
					});
					jQuery("#form-tambah-testimoni").validationEngine({
						ignore: ':not(select:hidden, input:visible, textarea:visible)',
						promptPosition : "topRight:-90",
						validateNonVisibleFields: true
					});
					jQuery("#form-edit-testimoni").validationEngine({
						ignore: ':not(select:hidden, input:visible, textarea:visible)',
						promptPosition : "topRight:-90",
						validateNonVisibleFields: true
					});
					jQuery("#form-tambah-portfolio").validationEngine({
						ignore: ':not(select:hidden, input:visible, textarea:visible)',
						promptPosition : "topRight:-90",
						validateNonVisibleFields: true
					});
					jQuery("#form-edit-portfolio").validationEngine({
						ignore: ':not(select:hidden, input:visible, textarea:visible)',
						promptPosition : "topRight:-90",
						validateNonVisibleFields: true
					});
					jQuery("#form-tambah-news").validationEngine({
						ignore: ':not(select:hidden, input:visible, textarea:visible)',
						promptPosition : "topRight:-90",
						validateNonVisibleFields: true
					});
					jQuery("#form-edit-news").validationEngine({
						ignore: ':not(select:hidden, input:visible, textarea:visible)',
						promptPosition : "topRight:-90",
						validateNonVisibleFields: true
					});
				$('.gambar').bind('change', function() {
					var fsize = this.files[0].size; //get file size
					var ftype = this.files[0].type; // get file type
					var gambar = $(".gambar");
					//allow only valid image file types
					switch(ftype)
					{
						case 'image/png' : case 'image/jpeg': case 'image/pjpeg':
						break;
						default:
							$("input[type='file']").val('')
							var handler = $("#notification-container")
								.notify()
								.notify("create", "themeroller", {title: "Error", text: "File gambar yang diizinkan JPG, dan PNG"}, {custom: true, speed: 1000, expires: 2500});
							return false;
							
					}
		
					//Allowed file size is less than 1 MB (1048576)
					if(fsize>1048576)
					{
						var handler = $("#notification-container")
							.notify()
							.notify("create", "themeroller", {title: "Error", text: "Size file terlalu besar maksimal 1 MB"}, {custom: true, speed: 1000, expires: 3000});
						return false;
					}
		
				});
								$(".hapusKategori").click(function() {
					
					var id = $(this).attr('href');
		
					var form_data = {
						"action" : "deleteKategori",
						"id_kategori" : id
					};

					$.ajax({
						type : "POST",
						url : "admin/act_delete_kategori",
						data : form_data,
						dataType : "JSON",
						success : function(data) {
							if(data.status == 1) {
								$("#growl").notify("create", {
									text: data.messages
								},{
									expires: 2500,
									speed: 1000,
									stack:'above'
								});
								setTimeout(function () {
										window.location = "kategori";
									}, 3500);
							 
							}
							else {
							   var handler = $("#notification-container")
									.notify()
									.notify("create", "themeroller", {title: "Error", text: data.messages}, {custom: true, speed: 1000, expires: 2500});
								return false;
							}
						},
						error : function(){
							alert('gagal');
						}
					});
					return false;
				});
				
						// basic
        $("#growl").notify();
        $("#growl-bottom").notify();

        // or with options (there are only 2)
        $("#notification-container").notify({
            speed: 500,
            expires: true
        });


});
