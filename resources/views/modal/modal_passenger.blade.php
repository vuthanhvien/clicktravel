<div id="select_passenger" class="modal fade modal-passenger" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content passenger">
            <div class="modal-header text-center" style="background: #3097D1; border-top-left-radius: 5px; border-top-right-radius: 5px;">
                <h4 class="modal-title text-white">Số lượng hành khách</h4>
            </div>
            <div class="modal-body " style="padding: 0">
                <div class="popover-body">
                    <div>
                        <button class="btn" onClick="down('adult')"><i class="fa fa-minus"></i></button><span class="nb" id="adult"> 1 </span> <button class="btn" onClick="up('adult')"><i class="fa fa-plus"></i></button> <span> Người lớn (hơn 12 tuổi)</span>
                    </div>
                    <hr>
                    <div>
                        <button class="btn" onClick="down('children')"><i class="fa fa-minus"></i></button><span class="nb" id="children"> 0 </span> <button class="btn" onClick="up('children')"><i class="fa fa-plus"></i></button> <span> Trẻ em (từ 2 đến 11 tuổi)</span>
                    </div>
                    <hr>
                    <div>
                        <button class="btn" onClick="down('baby')"><i class="fa fa-minus"></i></button><span class="nb" id="baby"> 0 </span> <button class="btn" onClick="up('baby')"><i class="fa fa-plus"></i></button> <span> Trẻ sơ sinh (dưới 24 tháng)</span>

                    </div>
                </div>
                <div class=" text-center" style="padding: 10px 0 0 0">
                    <button class="btn-end" onClick="update(); closePopover();" data-dismiss="modal">
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>