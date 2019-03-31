$('#document').ready(function () {
    $('#addplace').on('click',function (e) {
        var name=$('#name').val();
        var address=$('#address').val();
        var latitude=$('#latitude').val();
        var longtude=$('#longtude').val();
        var type=$('#type').val();
        var msg=$('#message');
        if(name != '' || name !=null || address !='' || address !=null || latitude !='' || latitude !=null || longtude !='' || longtude !=null || type !='' || type!=null )
        {

        }else {
            e.preventDefault();
            msg.html("<span class='btn btn-danger'>All fields required</span>");
        }
    });
    $('#placeForm').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply Company Name'
                    }
                }
            },
            address: {
                validators: {
                    stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply Address'
                    }
                }
            },
            latitude: {
                validators: {
                    between: {
                        min: -90,
                        max: 90,
                        message: 'The latitude must be between -90 and 90'
                    },
                    notEmpty: {
                        message: 'Please supply Latitude'
                    }
                }
            },
            longtude: {
                validators: {
                    between: {
                        min: -180,
                        max: 180,
                        message: 'The latitude must be between -180 and 180'
                    },
                    notEmpty: {
                        message: 'Please supply Longitude'
                    }
                }
            },
            type: {
                validators: {
                    notEmpty: {
                        message: 'Please select Type'
                    }
                }
            }
        }
    });
    $('#addDescription').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            place: {
                validators: {
                    notEmpty: {
                        message: 'Please Select Place'
                    }
                }
            },
            upload_image: {
                validators: {
                    notEmpty: {
                        message: 'Please Select image'
                    }
                }
            },
            actual_price: {
                validators: {
                    between: {
                        min: 0,
                        max: 100000,
                        message: 'The actual price must be between 0 and 100000'
                    },
                    notEmpty: {
                        message: 'Please Enter actual price'
                    }
                }
            },
            discount: {
                validators: {
                    between: {
                        min: 0,
                        max: 100,
                        message: 'The discount percentage must be between 0 and 100'
                    },
                    notEmpty: {
                        message: 'Please Enter discount'
                    }
                }
            },
            description: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter description'
                    },
                    stringLength: {
                        max: 500,
                        message: 'The content must be less than 500 characters long'
                    }
                }
            },
            name: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter name'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter email'
                    },
                    emailAddress: {
                        message: 'The value is not a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please Enter phone'
                    }
                }
            }
        }
    });
});