<table class="table table-responsive" id="wpUsers-table">
    <thead>
        <th>Wp User Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($wpUsers as $wpUsers)
        <tr>
            <td>{!! $wpUsers->wp_user_id !!}</td>
            <td>
                {!! Form::open(['route' => ['wpUsers.destroy', $wpUsers->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('wpUsers.show', [$wpUsers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('wpUsers.edit', [$wpUsers->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
