@if(isset($allow_delete) && ($allow_delete == false))


<a href="#"  class="btn btn-xs btn-danger delete_warning text-white mb-1" style="cursor:pointer;">
    <i class="fa fa-trash"
       data-toggle="tooltip"
       data-placement="top" title=""
       data-original-title="Warning"></i>
</a>
@else

    <a data-method="delete" data-trans-button-cancel="Cancel"
       data-trans-button-confirm="Delete" data-trans-title="Are you sure?"
       class="btn btn-xs btn-danger text-white mb-1" style="cursor:pointer;"
       onclick="$(this).find('form').submit();">
        <i class="fa fa-trash"
           data-toggle="tooltip"
           data-placement="top" title=""
           data-original-title="Delete"></i>
        <form action="{{$route}}"
              method="POST" name="delete_item" style="display:none">
            @csrf
            {{method_field('DELETE')}}
        </form>
    </a>
@endif
