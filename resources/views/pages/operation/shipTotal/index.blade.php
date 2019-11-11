<div class="row">
        <div class="col-md-12">
            <table class="table table-borderless table-hover table-sm display" id="example">
                <thead class="thead-light">
                    <tr>
                        <th>id</th>
                        <th width='40%'>{{ __('Description') }}</th>
                        <th>{{ __('OrderCyty')}}</th>
                        <th>{{ __('NbPakage')}}</th>
                        <th>{{ __('NetQty')}}</th>
                        <th>{{ __('GrossWeight')}}</th>
                        <th>{{ __('Options')}}</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="#" class="btn-fab fab-right  shadow btn-primary" title="{{ __('AddProduct') }}" onclick="showModal('create','saveDataT')"><i class="icon-add"></i></a>
            <a href="{{ route('pdf') }}" class="btn-fab btn-danger" title="{{ __('ExportPDF') }}" target="_blank"><i class="icon icon-file-pdf"></i></a>
        </div>
    </div>
