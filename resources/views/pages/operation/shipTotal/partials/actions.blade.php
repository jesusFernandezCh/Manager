<button type="button" class="btn btn-default btn-sm" title="{{ __('Edit') }}" onclick="editDataTable('{{ route('operationShipTotals.edit',$id) }}','{{ route('operationShipTotals.update',$id) }}')">
        <i class="icon-pencil text-info"></i>
</button>
<button type="button" class="btn btn-default btn-sm" title="{{ __('Delete') }}" onclick="delDataTable('{{ route('operationShipTotals.destroy',$id) }}')">
    <i class="icon-trash-can3 text-danger"></i>
</button>
