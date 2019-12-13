<!--
<div class="awe-page-loading">
    <div class="awe-loading-wrapper">
        <div class="awe-loading-icon">
            <img src="{{asset('app/assets/images/logo.png')}}" alt="images">
        </div>
        <div class="progress">
            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>
-->

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                    <h4 class="modal-title" id="myLargeModalLabel">Search Here</h4>
                </div>
                <div class="modal-body">
                <form method="GET" action="/results">
                    <div class="input-group">
                        <input type="text" class="form-control control-search" name="query" placeholder="Type & hit enter...">
                          <span class="input-group-btn">
                            <button class="btn btn-default button_search" type="button"><i data-toggle="dropdown" class="icons icon-magnifier dropdown-toggle"></i></button>
                          </span>
                    </div><!-- /input-group -->
                </form>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!-- End pushmenu -->
    <div id="box-user" style="display:none;">
        <iframe width="980" src="#"></iframe>
    </div>
