<table class="table table-responsive" id="realStates-table">
    <thead>
        <tr>
            <th>City</th>
        <th>Group</th>
        <th>Building</th>
        <th>Flat</th>
        <th>Type</th>
        <th>View</th>
        <th>Purpose</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Price</th>
        <th>State</th>
        <th>Date</th>
        <th>Note</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($realStates as $realState)
        <tr>
            <td>{!! $realState->city !!}</td>
            <td>{!! $realState->group !!}</td>
            <td>{!! $realState->building !!}</td>
            <td>{!! $realState->flat !!}</td>
            <td>{!! $realState->type !!}</td>
            <td>{!! $realState->view !!}</td>
            <td>{!! $realState->purpose !!}</td>
            <td>{!! $realState->name !!}</td>
            <td>{!! $realState->mobile !!}</td>
            <td>{!! $realState->price !!}</td>
            <td>{!! $realState->state !!}</td>
            <td>{!! $realState->date !!}</td>
            <td>{!! $realState->note !!}</td>
            <td>
                {!! Form::open(['route' => ['realStates.destroy', $realState->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('realStates.show', [$realState->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('realStates.edit', [$realState->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>