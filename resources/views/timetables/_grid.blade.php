<div class="card">
    <div class="card-header">
        <h3 class="card-title">Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Teacher</th>
                <th>Subject</th>
                <th>Group</th>
                <th>Room</th>
                <th>Start</th>
                <th>Finish</th>
            </tr>
            </thead>
            <tbody>
                @foreach($list as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->teacher->full_name }}</td>
                        <td>{{ $item->subject->name }}</td>
                        <td>{{ $item->group->name }}</td>
                        <td>{{ $item->room->number }} <sup title="Floor">{{ $item->room->floor }}</sup></td>
                        <td>{{ $item->begin_time }}</td>
                        <td>{{ $item->end_time }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
        {{ $list->appends(request()->all())->links() }}
    </div>
</div>