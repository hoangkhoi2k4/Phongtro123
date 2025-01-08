$.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
//upload image
$('#fileInput').on('change',()=>{
    var formData = new FormData()
    var files = $('#fileInput')[0].files
    for (let index = 0; index < files.length; index++) {
        formData.append('files[]',files[index])
    }
    $.ajax({
        url: '/uploads',
        method: 'POST',
        dataType: 'JSON',
        data: formData,
        contentType: false,
        processData: false,
        success: function(result) {
            if (result.success === true) {
                let html = '';
                for (let index = 0; index < result.paths.length; index++) {
                    html +=
                        '<img src="' + result.paths[index] + '" alt="">' +
                        '<input type="hidden" value="' + result.paths[index] + '" class="product-images" name="images[]">';
                }
                let html2 = '';
                for(let index = 0; index < result.images_public_id.length; index++){
                    html2 += '<input type="hidden" value="'+result.images_public_id[index]
                    + '" class="product-images-public-id" name="images_public_id[]">';
                }
                $('#input-ids').html(html2);
                $('#input-file-imgs').html(html);
            }
        }
    });
})

// upload video
$('#fileInputVideo').on('change',()=>{
    var formData = new FormData();
    var file = $('#fileInputVideo')[0].files[0]
    formData.append('file',file)
    $.ajax({
        url : '/upload',
        processData: false,
        dataType: 'json',
        data: formData,
        method: 'POST',
        contentType: false,
        success: function(result){
            if(result.success == true)
            {
                html = '';
                html+= '<video src="'+result.path+'" alt=""> <input type="hidden" value="'+result.path+'" name="video" id="input-file-video-hidden"> </video>';
                $('#input-file-video').html(html)
                $('#input-file-video-hidden').val(result.path)
            }
        }
    })
})
// confirm delete 

function confirmDelete(){
    return confirm('Bạn chắc chắn muốn xóa tin này?')
}