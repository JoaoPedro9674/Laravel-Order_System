<div class="modal fade" id="order_detail_popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: rgb(244, 244, 244)">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ __('home.order_detail') }}</h5>
                <button type="button" class="close" style="font-size: 22px" onclick="hideModal()">&times;</button>
            </div>
            <div class="modal-body" style="font-size: 13px; font-family:'Inter';">
                <div class="container" style="padding: 10px">
                    <div class="order_detail_div1" style="height: 220px !important;">
                        <input type="hidden" id="detail_id">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group form_dv_wrap" style="display: flex; align-items:center">
                                    <p style="width:120px; margin:0"><strong>{{ __('home.customer_number') }}</strong>
                                    </p>
                                    <div id="detail_customer_number" class="order_detail_input_div_element"
                                        style="width:calc(100% - 120px);">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group form_dv_wrap" style="display: flex; align-items:center">
                                    <p style="width:120px; margin:0"><strong>{{ __('home.order_number') }}</strong>
                                    </p>
                                    <div id="detail_order_number" class="order_detail_input_div_element"
                                        style="width:calc(100% - 120px);">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group form_dv_wrap" style="display: flex; align-items:center">
                                    <p style="width:120px; margin:0"><strong>{{ __('home.projectname') }}</strong>
                                    </p>
                                    <div id="detail_project_name" class="order_detail_input_div_element"
                                        style="width:calc(100% - 120px);">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group form_dv_wrap order_size"
                                    style="display: flex; align-items:center">
                                    <p style="width:120px; margin:0"><strong>{{ __('home.size') }}</strong>
                                    </p>
                                    <div id="detail_size" class="order_detail_input_div_element" style="width:110px;">
                                    </div>
                                    <span style="margin-left: 10px;">mm</span>
                                    <div id="detail_width_height" class="order_detail_input_div_element"
                                        style="width:165px; margin-left:25px">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group form_dv_wrap order_final_product"
                                    style="display: flex; align-items:center">
                                    <p style="width:120px; margin:0"><strong>{{ __('home.fianl_product') }}</strong>
                                    </p>
                                    <div id="detail_final_product" class="order_detail_input_div_element"
                                        style="width:calc(100% - 120px);">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group form_dv_wrap" style="display: flex;">
                                    <p style="width:120px; margin:0">
                                        <strong>{{ __('home.special instructions') }}</strong>
                                    </p>
                                    <div id="detail_special_instructions" class="order_detail_input_div_element"
                                        style="width:calc(100% - 120px); height:100px !important; align-items:flex-start;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="order_detail_div2">
                        <div class="col-12">
                            <div style="display: flex; justify-content:flex-end; margin-bottom:5px;">
                                <button class="btn btn-primary btn-sm" onclick="multipleDownload()"
                                    style="background-color:#c3ac6d; border:none; font-size:13px;"><i
                                        class="fa-solid fa-download"></i>&nbsp&nbsp{{ __('home.alldownload') }}</button>
                            </div>
                        </div>
                        <div class="col-12" style="display:flex;">
                            <div class="col-2">
                                <ul class="nav nav-tabs flex-column"
                                    style="background-color: rgb(244, 244, 244); width:95%; border-bottom:none; padding-left:0px;">
                                    <li class="nav-item">
                                        <div class="folder_button" type="button" id="subfolder_structure1">
                                            <div style="height: 54%;margin-bottom: 5px;padding: 0; text-align:center;">
                                                <img src="{{ asset('asset/images/folder-open-duotone.svg') }}"
                                                    style="width: 37px;">
                                            </div>
                                            <div style="height: 40%;padding: 3px 0;">
                                                <p style="padding-top: 6px;">
                                                    ORIGINALDATEI</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="folder_button" type="button" id="subfolder_structure2">
                                            <div style="height: 54%;margin-bottom: 5px;padding: 0; text-align:center;">
                                                <img src="{{ asset('asset/images/folder-open-duotone.svg') }}"
                                                    style="width: 37px;">
                                            </div>
                                            <div style="height: 40%;padding: 3px 0;">
                                                <p style="padding-top: 6px;">
                                                    STICKPROGRAMM</p>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div class="col-10 responsive-table">

                                <table id="order_detail" class="table table-striped"
                                    style="width:100%; font-size:13px;">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">
                                                {{ __('home.customer_number') }}</th>
                                            <th style="text-align: center">{{ __('home.order_number') }}</th>
                                            <th style="text-align: center">{{ __('home.index') }}</th>
                                            <th style="text-align: center">{{ __('home.extension') }}</th>
                                            <th style="text-align: center">{{ __('home.download') }}</th>

                                        </tr>
                                    </thead>
                                    <tbody style="text-align: center"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var folderType = 'Originaldatei';

    function openOrderDetailModal(id, type) {
        var detail_table;
        $('#detail_id').val(id);
        $('#subfolder_structure1').hide();
        $('#subfolder_structure2').hide();

        folderType = type;

        $.ajax({
            url: '{{ __('routes.customer-get-order-detail') }}',
            type: 'GET',
            data: {
                id
            },
            success: (data) => {
                console.log(data);
                var folderArray = [];
                data.detail.map((item, index) => {
                    item = item.split('/')[3];
                    if (folderArray.filter((el) => el == item).length == 0) {
                        folderArray.push(item);
                    }
                });
                console.log(folderArray);
                $('#order_detail_popup').find('#detail_customer_number').text(data.order.customer_number);
                $('#detail_id').val(data.order.id);
                $('#order_detail_popup').find('#detail_order_number').text(data.order.order_number);
                $('#order_detail_popup').find('#detail_project_name').text(data.order.project_name);
                $('#order_detail_popup').find('#detail_size').text(data.order.size);
                $('#order_detail_popup').find('#detail_width_height').text(data.order.width_height);
                $('#order_detail_popup').find('#detail_final_product').text(data.order.products);
                $('#order_detail_popup').find('#detail_special_instructions').text(data
                    .order.special_instructions);
                $data_type = data.order.type;
                if ($data_type == "Vector") {
                    $('.order_size').hide();
                    $('.order_final_product').hide();
                } else {
                    $('.order_size').show();
                    $('.order_final_product').show();
                }
                folderArray.forEach((item) => {
                    if (item == "Originaldatei") {
                        $('#subfolder_structure1').show();
                    } else if (item == "Stickprogramm") {
                        $('#subfolder_structure2').show();
                    }
                })
            },
            error: () => {
                console.error('err');
            }
        })

        detail_table = $('#order_detail').DataTable({
            responsive: true,
            language: {

            },
            processing: true,
            serverSide: true,
            ajax: {
                url: '{{ __('routes.customer-order_detail') }}',
                data: function(d) {
                    d.id = id;
                    d.type = type;
                },
            },
            columns: [{
                    data: 'customer_number',
                    name: 'customer_number'
                },

                {
                    data: 'order_number',
                    name: 'order_number'
                },

                {
                    data: 'index',
                    name: 'index'
                },

                {
                    data: 'extension',
                    name: 'extension'
                },

                {
                    data: 'download',
                    name: 'download',
                    orderable: false,
                    searchable: false
                },

            ]
        });

        $('#order_detail_popup').modal("show");
        detail_table.destroy();
    }

    function multipleDownload() {
        window.location.href = '{{ url('multi-download') }}/' + $('#detail_id').val() + '?type=' + folderType;
    }
    $('#subfolder_structure1').click(function() {
        openOrderDetailModal($('#detail_id').val(), 'Originaldatei');
    });
    $('#subfolder_structure2').click(function() {
        openOrderDetailModal($('#detail_id').val(), 'Stickprogramm');
    });
</script>
