$(function() {

	$(".formdata").Validform({

		tiptype:function(msg){

			if (msg=='通过信息验证！') return;

			statusis(msg); return;

		},

		ignoreHidden:true,

		tipSweep:true,

		postonce:true,

		beforeSubmit:function(curform){

			addata();

			return false;

		},

	});
});






new Vue({

	el:'.page-container',

	data:{

		data:{},

		banner:[],

	},

	filters:{



	},

	mounted:function(){

		this.$nextTick(function() {

			this.getdata();

		});

	},

	methods:{

		getdata:function(){



		},

		sleimgup:function(e,storeimg){

			_this=this;

			// $(e.target)

			// console.log($(e.target));

			var imgbox=$(e.target).parent().parent().prev();

			var maxsize=$(e.target).attr('maxsize');

			var havesize=imgbox.children('li').length;

			var filePaths = e.target.files;

			var filelen=filePaths.length;

			filelen=filelen>maxsize-havesize?(maxsize-havesize):filelen;



			for( var i=0;i<filelen; i++ ){  

			    filemes=filePaths[i].name;

				Ary = filemes.split('.'); 

				filetype=Ary[Ary.length-1].toLowerCase();

				if(filetype != "png" && filetype != "gif" && filetype != "jpg" && filetype != "jpeg" && filetype != "bmp"){

					statusis('选择的图片中包含了非图片类型文件！请重新选择');

					$(e.target).val('');

					return;

				}

			}

			for( var i=0;i<filelen; i++ ){

				filemes=filePaths[i].name;

				var imgFile = new FileReader();  

			    imgFile.readAsDataURL(e.target.files[i]);

			    imgFile.onload = function () {

			    	

					// 图片压缩

			        var img = new Image,

						max_width = 1200,    //图片最大宽度，超过就按比例缩小

						quality = 0.75,  //图像质量

						canvas = document.createElement("canvas"),

						drawer = canvas.getContext("2d");

			        img.src=this.result;

			        

			        setTimeout(function () {

			        	//获取mime格式

				        t = img.src.match(/data:image\/(.+?);/);

						filetype = t[1];

				        // console.log(filetype);

				        // return;

				        if (filetype=='gif') {

					        if(img.src.length/1048576*0.75>4){

					        	statusis('一张gif图过大奖不被上传');

					        	return;

					        }else{

					        	// 上传

					   			muajax('Index/base_upload',{'filedata':img.src},function(res) {

									 console.log(res);

									storeimg.push({

						            	imgdata:img.src,

						            	httpsrc:res.path,

						            });

								 },$(e.target).parentsUntil('.m_imgsel')[0]);

				            	return;

					        }

					    }

					    if (img.width>max_width) {

			        		canvas.width=max_width;

			        		canvas.height = img.height*(max_width/img.width);

			        	}else{

			        		canvas.width = img.width;

			            	canvas.height = img.height;

			        	}

			            drawer.drawImage(img, 0, 0, canvas.width, canvas.height);

			            img.src = canvas.toDataURL("image/"+filetype, quality);



			            // 上传

			   			muajax('Index/base_upload',{'filedata':img.src},function(res) {

							 console.log(res);

							storeimg.push({

								imgdata:img.src,

								httpsrc:res.path,

							});

						 },$(e.target).parentsUntil('.m_imgsel')[0]);

		            	

			        },50);

			    }

			}

			filePaths.length>maxsize-havesize?statusis('最多只能上传'+maxsize+'张图片'):'';

			if (i==filePaths.length){

		    	$(e.target).val('');

		 	}



		},//选择图片上传

		removeimg:function(e,lis,key){

			lis.splice(key,1);

		},//移除图片

	},

});