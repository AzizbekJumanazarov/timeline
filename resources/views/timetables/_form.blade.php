<div class="card">
    <div class="card-header">
        <h3 class="card-title"><i class="fa fa-filter"></i> {{ 'Filter' }}</h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body" style="display: block;">
        <div class="card-body">
            <form method="GET">
                <div class="row p-1">
                    <div class="col-4">
                        <input type="text" name="search" value="{{ request()->get('search') }}" class="form-control" placeholder="Search">
                    </div>
                    <div class="col-4">
                        <select name="teacher_id" type="text" class="form-control" placeholder="Teacher">
                            <option value="">Select teacher</option>
                            @foreach($options['teachers'] as $item)
                                <option @if(request()->get('teacher_id') == $item->id) selected @endif value="{{$item->id}}">{{$item->full_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-4">
                        <select name="group_id" type="text" class="form-control" placeholder="Group">
                            <option value="">Select group</option>
                            @foreach($options['groups'] as $item)
                                <option @if(request()->get('group_id') == $item->id) selected @endif value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row p-1">
                    <div class="col-4">
                        <input value="{{ request()->get('begin_time') }}" name="begin_time" type="time" class="form-control" placeholder="Time">
                    </div>
                    <div class="col-4">
                        <select name="room_id" type="text" class="form-control">
                            <option value="">Select room</option>
                            @foreach($options['rooms'] as $item)
                                <option @if(request()->get('room_id') == $item->id) selected @endif value="{{$item->id}}">{{$item->number}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-4">
                        <select name="subject_id" type="text" class="form-control">
                            <option @if(request()->get('subject_id') == $item->id) selected @endif value="">Select subject</option>
                            @foreach($options['subjects'] as $item)
                                <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" class="btn btn-primary mt-3">Filter</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- /.card-body -->
</div>