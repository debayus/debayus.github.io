<x-layout>
    <x-slot:title>Gallery</x-slot>

    <div class="gb-content gb-projects" style="margin-top:100px;">
        <h1 class="text-center gb-title">Projects</h1>
        <div class="row">
            @foreach ($models as $model)
                <div class="col-md-6 col-lg-4">
                    <div class="form-group">
                        <div class="card">
                            <div class="gb-projects-image" style="background-image:url('{{ $model['image'] }}')"></div>
                            <div class="card-body">
                                <h4 class="text-center">{{ $model['title'] }}</h4>
                                <p>{{ $model['description'] }}</p>
                                @if (isset($model['youtube']))
                                    <a href="{{$model['youtube']}}" target="_blank">Youtube</a>
                                @endif
                                @if (isset($model['git']))
                                    <a href="{{$model['git']}}" target="_blank">Git</a>
                                @endif
                            </div>
                            @if (isset($model['tags']))
                                <div class="card-footer">
                                    @foreach($model['tags'] as $tag)
                                        <span class="badge bg-success">{{ $tag }}</span>
                                    @endforeach
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
