$(document).ready(function() {

/*----------------------------
     Logout section
    ------------------------------ */
        lgNotif = function (data) {
            if ( data == 'lgGreen' ) {
                location.reload();
            } else {
                var text = 'Logout gagal. <br>Error: '+ data;
                Lobibox.notify('error', {
                    sound: false,
                    msg: text
                });
            }
        }

        logClick = function (data) {
            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/mm-fctn.php',
                data: {
                    'mm-logout' : 1,
                },
                success: function(exc){
                    lgNotif(exc);
                },
                error: function(err){
                    lgNotif(err);
                } 
            });
        }


/*----------------------------
     Proposal section
    ------------------------------ */

        // Add proposal function
        addPNotif = function (data) {
            if ( data == 'green' ) {
                sessionStorage.setItem("notifonload", "add");
                window.location = "./";
            } else {
                var text = 'Gagal menambahkan Data. <br>Error: '+ data;
                Lobibox.notify('error', {
                    sound: false,
                    msg: text
                });
            }
        }

        addPrpsl = function (this_) {
            var form = this_.attr('id');
            var formAttr = document.getElementById(form);
            var f1 = new FormData(formAttr);

            f1.append('prpsl-add', 1);
            // console.log($(f1));
            // throw new Error("Something went badly wrong!");

            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/prpsl-fctn.php',
                data: f1,
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false, 
                enctype: 'multipart/form-data',
                success: function(data){
                    addPNotif(data);
                },
                error: function(err){
                    addPNotif(err);
                } 
            });
        }

        // Delete proposal function
        delPNotif = function (data) {
            if ( data == 'green' ) {
                location.reload();
            } else {
                var text = 'Gagal menghapus data. <br>Error: '+ data;
                Lobibox.notify('error', {
                    sound: false,
                    msg: text
                });
            }
        }

        delPrpsl = function (data) {
            var id = data;

            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/prpsl-fctn.php',
                data: {
                    'prpsl-del' : 1,
                    'data' : id,
                },
                success: function(data){
                    delPNotif(data);
                },
                error: function(err){
                    delPNotif(err);
                } 
            });
        }

        delModal = function (this_) {
            var pID = $(this_).data('post');

            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/prpsl-fctn.php',
                data: {
                    'prpsl-del-modal'   : 1,
                    'data'              : pID,
                },
                success: function(data){
                    $('#prpslDelete').html(data);
                }
            });
        }

        // notification update proposal
        plPutNotif = function (data) {
            if ( data == 'green' ) {
                sessionStorage.setItem("notifonload", true);
                location.reload();
            } else if ( data != "" ) {
                var text = 'Gagal mengubah data. <br>Error: '+ data;
                Lobibox.notify('error', {
                    sound: false,
                    msg: text
                });
            }
        }

        // Update proposal data kepengurusan function
        kpPut = function () {
            var form = this.document.forms;
            
            var formData = {};
            $(form).find("input[name]").each(function (index, node) {
                formData[node.name] = node.value;
            });

            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/prpsl-fctn.php',
                data: {
                    'prpsl-kp-put' : 1,
                    'data'         : formData,
                },
                success: function(data){
                    plPutNotif(data);
                }
            });
        }

        kgModal = function(this_) {
            var pID = $(this_).data('post');

            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/prpsl-fctn.php',
                data: {
                    'prpsl-kp-modal' : 1,
                    'data'           : pID,
                },
                success: function(data){
                    $('#prpslKPPut').html(data);
                }
            });
        }

        // Update proposal operasional sekretariatan function
        osPut = function () {
            var form = this.document.forms;
            
            var formData = {};
            $(form).find("input[name]").each(function (index, node) {
                formData[node.name] = node.value;
            });

            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/prpsl-fctn.php',
                data: {
                    'prpsl-os-put' : 1,
                    'data'         : formData,
                },
                success: function(data){
                  plPutNotif(data);
                }
            });
        }

        // Update proposal operasional sekretariatan function
        osRPut = function () {
            var form = this.document.forms;
            
            var formData = {};
            $(form).find("input[name]").each(function (index, node) {
                formData[node.name] = node.value;
            });

            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/prpsl-fctn.php',
                data: {
                    'prpsl-rea-os-put' : 1,
                    'data'         : formData,
                },
                success: function(data){
                    $('#prpslOSPut').html(data);
                }
            });
        }

        osModal = function(this_) {
            var pID = $(this_).data('post');

            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/prpsl-fctn.php',
                data: {
                    'prpsl-os-modal' : 1,
                    'data'           : pID,
                },
                success: function(data){
                    $('#prpslOSPut').html(data);
                }
            });
        }

        //Modal u/ add realisasi 
        osReaModal = function(this_) {
            var pID = $(this_).data('post');

            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/prpsl-fctn.php',
                data: {
                    'rea-os-modal' : 1,
                    'data'           : pID,
                },
                success: function(data){
                    $('#prpslOSPut').html(data);
                }
            });
        }

        // Update proposal pendidikan politik function
        ppPut = function (this_) {
            var form = this.document.forms;
            var cont = $(this_).data('cont');

            var formData = {};
            $(form).find("input[name]").each(function (index, node) {
                formData[node.name] = node.value;
            });

            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/prpsl-fctn.php',
                data: {
                    'prpsl-pp-put' : 1,
                    'data'         : formData,
                    'cont'         : cont
                },
                success: function(data){
                    plPutNotif(data);
                }
            });
        }

        ppModal = function(this_) {
            var pID  = $(this_).data('post');
            var cont = $(this_).data('ttl');

            if ( cont == "del" ) {
                $.ajax({
                    type: 'POST',
                    url: '../../assts/fctn/prpsl-fctn.php',
                    data: {
                        'prpsl-pp-del-modal' : 1,
                        'data'               : pID,
                    },
                    success: function(data){
                        $('#prpslPPDel').html(data);
                    }
                });
            }

            else {
                $.ajax({
                    type: 'POST',
                    url: '../../assts/fctn/prpsl-fctn.php',
                    data: {
                        'prpsl-pp-put-modal' : 1,
                        'data'               : pID,
                        'condition'          : cont,
                    },
                    success: function(data){
                        $('#prpslPPPut').html(data);
                    }
                });
            }

        }

        // Delete proposal pendidikan politik function
        delPP = function (data) {
            var id = data;

            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/prpsl-fctn.php',
                data: {
                    'prpsl-pp-del' : 1,
                    'data' : id,
                },
                success: function(data){
                    plPutNotif(data);
                }
            });
        }

        putFile = function (this_) {
            var form = this_.attr('id');
            var formAttr = document.getElementById(form);
            var formData = new FormData(formAttr);
            
            formData.append('prpsl-file-put', 1);

            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/prpsl-fctn.php',
                data: formData,
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false, 
                enctype: 'multipart/form-data',
                success: function(data){
                    plPutNotif(data);
                },
                error: function(err){
                    plPutNotif(err);
                } 
            });
        }

        delFile = function (data) {
            var id = data;

            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/prpsl-fctn.php',
                data: {
                    'prpsl-file-del' : 1,
                    'data' : id,
                },
                success: function(data){
                    plPutNotif(data);
                },
                error: function(err){
                    plPutNotif(err);
                } 
            });
        }

        flModal = function(this_) {
            var flID = $(this_).data('post');

            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/prpsl-fctn.php',
                data: {
                    'prpsl-fl-modal' : 1,
                    'data'           : flID,
                },
                success: function(data){
                    $('#prpslFLDel').html(data);
                }
            });
        }

        cancelPrpsl = function(this_) {
            window.location.href = "../../dashboard/member/rab.php";
        }

/*----------------------------
     User section
    ------------------------------ */
        // User status setting
        uStatPutNotif = function (data) {
            if ( data == 'green' ) {
                sessionStorage.setItem("notifonload", "ustatput");
                location.reload();
            } else {
                var text = 'Gagal mengubah status user. <br>Error: '+ data;
                Lobibox.notify('error', {
                    sound: false,
                    msg: text
                });
            }
        }

        uSettingStat = function(this_) {
            var id = this_.attr('data-id');
            var stat = this_.attr('data-value');

            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/usr-fctn.php',
                data: {
                    'user-setting-status' : 1,
                    'id' : id,
                    'stat' : stat,
                },
                success: function(data){
                    uStatPutNotif(data);
                },
                error: function(err){
                    uStatPutNotif(err);
                } 
            });
        }

        // User password setting
        uPassPutNotif = function (data) {
            if ( data == 'green' ) {
                sessionStorage.setItem("notifonload", "upassput");
                location.reload();
            } else {
                var text = 'Gagal mengubah password user. <br>Error: '+ data;
                Lobibox.notify('error', {
                    sound: false,
                    msg: text
                });
            }
        }

        uPassChange = function(this_) {
            var form = this_.attr('id');
            var formAttr = document.getElementById(form);
            var formdata = new FormData(formAttr);

            formdata.append('upass-put', 1);
            
            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/usr-fctn.php',
                data: formdata,
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false, 
                enctype: 'multipart/form-data',
                success: function(data){
                    uPassPutNotif(data);
                },
                error: function(err){
                    uPassPutNotif(err);
                } 
            });
        }

        uPassChangeCheck = function(this_) {
            var form = this_.attr('id');
            var formAttr = document.getElementById(form);
            var formdata = new FormData(formAttr);

            formdata.append('upass-check', 1);

            var id = formAttr.elements['userid'].value;
            var oldp = formAttr.elements['oldpass'].value;
            var newp = formAttr.elements['newpass'].value;
            var rep = formAttr.elements['repass'].value;

            if (id == "" || oldp == "" || newp == "" || rep == "") {
                var data = "Kolom data tidak boleh ada yang kosong";
                uPassPutNotif(data);
            } else {
                if (newp != rep) {
                    uPassPutNotif("Password baru dan penulisan ulang password tidak sama");
                } else {
                    $.ajax({
                        type: 'POST',
                        url: '../../assts/fctn/usr-fctn.php',
                        data: {
                            'upass-check' : 1,
                            'meid' : id,
                            'oldp' : oldp,
                        },
                        success: function(data){
                            if (data == "green") {
                                uPassChange(this_);
                            } else {
                                uPassPutNotif(data);
                            }
                        },
                        error: function(err){
                            uPassPutNotif(err);
                        } 
                    });
                }
            }
        }

        // User account setting
        uAccPutNotif = function (data) {
            if ( data == 'green' ) {
                sessionStorage.setItem("notifonload", "uaccput");
                location.reload();
            } else {
                var text = 'Profile gagal dirubah. <br>Error: '+ data;
                Lobibox.notify('error', {
                    sound: false,
                    msg: text
                });
            }
        }

        uAccChange = function(this_) {
            var form = this_.attr('id');
            var formAttr = document.getElementById(form);
            var formdata = new FormData(formAttr);

            formdata.append('uacc-put', 1);

            $.ajax({
                type: 'POST',
                url: '../../assts/fctn/usr-fctn.php',
                data: formdata,
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false, 
                enctype: 'multipart/form-data',
                success: function(data){
                    uAccPutNotif(data);
                },
                error: function(err){
                    uAccPutNotif(err);
                } 
            });
        }
})

window.onload = function() {
    var notif = sessionStorage.getItem('notifonload');
    if (notif == "true") {
        Lobibox.notify('success', {
            sound: false,
            msg: 'Data proposal berhasil diubah'
        });
    } else if (notif == "add") {
        Lobibox.notify('success', {
            sound: false,
            msg: 'Data berhasil ditambahkan'
        });
    } else if (notif == "ustatput") {
        Lobibox.notify('success', {
            sound: false,
            msg: 'Status user berhasil dirubah'
        });
    } else if (notif == "upassput") {
        Lobibox.notify('success', {
            sound: false,
            msg: 'Password user berhasil dirubah'
        });
    } else if (notif == "uaccput") {
        Lobibox.notify('success', {
            sound: false,
            msg: 'Data profile berhasil dirubah'
        });
    }
    sessionStorage.clear();
}

