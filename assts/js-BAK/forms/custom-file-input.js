
(function(window, document, $) {

    'use strict';
    var flMime = 'application/pdf';
  
    //Custom File Input

    $('#inpFile-1').change(function (e) {
        if ( e.target.files[0].type != flMime ) {
            Lobibox.notify('error', {
                sound: false,
                msg: "PDF Only! Silahkah upload file berformat PDF"
            });
        } else {
            if ( e.target.files[0].size > 5000000 ) {
                Lobibox.notify('error', {
                    sound: false,
                    msg: "Maaf, file anda terlalu besar"
                });
            } else {
                document.getElementById('txtFile-1').value = e.target.files[0].name;
            }
        }
    });

    $('#inpFile-2').change(function (e) {
        if ( e.target.files[0].type != flMime ) {
            Lobibox.notify('error', {
                sound: false,
                msg: "PDF Only! Silahkah upload file berformat PDF"
            });
        } else {
            if ( e.target.files[0].size > 5000000 ) {
                Lobibox.notify('error', {
                    sound: false,
                    msg: "Maaf, file anda terlalu besar"
                });
            } else {
                document.getElementById('txtFile-2').value = e.target.files[0].name;
            }
        }
    });

    $('#inpFile-3').change(function (e) {
        if ( e.target.files[0].type != flMime ) {
            Lobibox.notify('error', {
                sound: false,
                msg: "PDF Only! Silahkah upload file berformat PDF"
            });
        } else {
            if ( e.target.files[0].size > 5000000 ) {
                Lobibox.notify('error', {
                    sound: false,
                    msg: "Maaf, file anda terlalu besar"
                });
            } else {
                document.getElementById('txtFile-3').value = e.target.files[0].name;
            }
        }
    });

    $('#inpFile-4').change(function (e) {
        if ( e.target.files[0].type != flMime ) {
            Lobibox.notify('error', {
                sound: false,
                msg: "PDF Only! Silahkah upload file berformat PDF"
            });
        } else {
            if ( e.target.files[0].size > 5000000 ) {
                Lobibox.notify('error', {
                    sound: false,
                    msg: "Maaf, file anda terlalu besar"
                });
            } else {
                document.getElementById('txtFile-4').value = e.target.files[0].name;
            }
        }
    });

    $('#inpFile-5').change(function (e) {
        if ( e.target.files[0].type != flMime ) {
            Lobibox.notify('error', {
                sound: false,
                msg: "PDF Only! Silahkah upload file berformat PDF"
            });
        } else {
            if ( e.target.files[0].size > 5000000 ) {
                Lobibox.notify('error', {
                    sound: false,
                    msg: "Maaf, file anda terlalu besar"
                });
            } else {
                document.getElementById('txtFile-5').value = e.target.files[0].name;
            }
        }
    });

    $('#inpFile-6').change(function (e) {
        if ( e.target.files[0].type != flMime ) {
            Lobibox.notify('error', {
                sound: false,
                msg: "PDF Only! Silahkah upload file berformat PDF"
            });
        } else {
            if ( e.target.files[0].size > 5000000 ) {
                Lobibox.notify('error', {
                    sound: false,
                    msg: "Maaf, file anda terlalu besar"
                });
            } else {
                document.getElementById('txtFile-6').value = e.target.files[0].name;
            }
        }
    });

    $('#inpFile-7').change(function (e) {
        if ( e.target.files[0].type != flMime ) {
            Lobibox.notify('error', {
                sound: false,
                msg: "PDF Only! Silahkah upload file berformat PDF"
            });
        } else {
            if ( e.target.files[0].size > 5000000 ) {
                Lobibox.notify('error', {
                    sound: false,
                    msg: "Maaf, file anda terlalu besar"
                });
            } else {
                document.getElementById('txtFile-7').value = e.target.files[0].name;
            }
        }
    });

    $('#inpFile-8').change(function (e) {
        if ( e.target.files[0].type != flMime ) {
            Lobibox.notify('error', {
                sound: false,
                msg: "PDF Only! Silahkah upload file berformat PDF"
            });
        } else {
            if ( e.target.files[0].size > 5000000 ) {
                Lobibox.notify('error', {
                    sound: false,
                    msg: "Maaf, file anda terlalu besar"
                });
            } else {
                document.getElementById('txtFile-8').value = e.target.files[0].name;
            }
        }
    });

    // $('#prfpic').change(function (e) {
    //     document.getElementById('txtFile-8').value = e.target.files[0].name;
    // });

})(window, document, jQuery);

$(document).ready(function() {
    fileput = function (e) {
        var fLabel = e.data('target');

        if ( e[0].files[0].type != 'application/pdf' ) {
            Lobibox.notify('error', {
                sound: false,
                msg: "PDF Only! Silahkah upload file berformat PDF"
            });
        } else {
            if ( e[0].files[0].size > 5000000 ) {
                Lobibox.notify('error', {
                    sound: false,
                    msg: "Maaf, file anda terlalu besar"
                });
            } else {
                document.getElementById(fLabel).value = e[0].files[0].name;
            }
        }
    }

    profilepic = function (e) {
        var fLabel = e.data('target');

        if ( e[0].files[0].type == 'image/jpg' || 
             e[0].files[0].type == 'image/JPG' ||
             e[0].files[0].type == 'image/png' ||
             e[0].files[0].type == 'image/PNG' ||
             e[0].files[0].type == 'image/jpeg'|| 
             e[0].files[0].type == 'image/JPEG' ) {
            if ( e[0].files[0].size > 5000000 ) {
                Lobibox.notify('error', {
                    sound: false,
                    msg: "Maaf, file anda terlalu besar"
                });
            } else {
                document.getElementById(fLabel).value = e[0].files[0].name;
            }
        } else {
            Lobibox.notify('error', {
                sound: false,
                msg: "Hanya dapat menerima file gambar"
            });
        }
    }
});