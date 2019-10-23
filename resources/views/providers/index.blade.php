@extends('layouts.app', [
'namePage' => 'Proveedores',
'class' => 'sidebar-mini',
'pageProvider' => 'active',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    {{-- Boton de agregar proveedor a través del modal crear --}}
                    <a class="btn btn-primary btn-round text-white pull-right" data-toggle="modal"
                        data-target="#exampleModal">{{ __('Agregar Proveedor') }}</a>

                    <h4 class="card-title">{{ __('Proveedores') }}</h4>
                    <div class="col-12 mt-2">
                        @include('alerts.success')
                        @include('alerts.errors')
                        @include('providers.partials.create')
                    </div>
                </div>
                <div class="card-body">
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>{{ __('Perfil') }}</th>
                                <th>{{ __('Nombre') }}</th>
                                <th>{{ __('Compañia') }}</th>
                                <th>{{ __('Correo') }}</th>
                                <th>{{ __('Teléfonos') }}</th>
                                <th class="disabled-sorting">{{ __('Acciones') }}</th>
                            </tr>
                        </thead>
                        <tfoot>

                        </tfoot>
                        <tbody>
                            @foreach($providers as $provider)
                            <tr>
                                <td>
                                    <span class="avatar avatar-sm rounded-circle">
                                        <img src="{{asset('assets')}}/img/default-avatar.png" alt=""
                                            style="max-width: 80px; border-radiu: 100px">
                                    </span>
                                </td>
                                <td>{{$provider->name}} {{$provider->lastName}}</td>
                                <td>{{$provider->company}}</td>
                                <td>{{$provider->email}}</td>
                                <td>{{$provider->phone1}} -/- {{$provider->phone2}}</td>
                                <td class="text-right">
                                    @if($provider->id!=auth()->user()->id)
                                    <a type="button" href="{{route("providers.edit",$provider)}}" rel="tooltip"
                                        class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                                        <i class="now-ui-icons ui-2_settings-90"></i>
                                    </a>
                                    <form action="{{ route('providers.destroy', $provider) }}" method="post"
                                        style="display:inline-block;" class="delete-form">
                                        @csrf
                                        @method('delete')
                                        <button type="button" rel="tooltip"
                                            class="btn btn-danger btn-icon btn-sm delete-button" data-original-title=""
                                            title=""
                                            onclick="confirm('{{ __('¿Está seguro de querer eliminar este proveedor?') }}') ? this.parentElement.submit() : ''">
                                            <i class="now-ui-icons ui-1_simple-remove"></i>
                                        </button>
                                    </form>
                                    @else
                                    <a type="button" href="{{ route('providers.edit', $provider) }}" rel="tooltip"
                                        class="btn btn-success btn-icon btn-sm " data-original-title="" title="">
                                        <i class="now-ui-icons ui-2_settings-90"></i>
                                    </a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- end content-->
            </div>
            <!--  end card  -->
        </div>
        <!-- end col-md-12 -->
    </div>
    <!-- end row -->
</div>

@endsection

@push('js')
<script>

  $('#exampleModal').modal('show');
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)

  modal.find('.modal-body input').val(recipient)
})



    $(document).ready(function() {
      $(".delete-button").click(function(){
        var clickedButton = $( this );
        Swal.fire({
        title: '¿Está seguro?',
        text: "Esto no se podrá revertir",
        type: 'Cuidado',
        showCancelButton: true,
        confirmButtonClass: 'btn btn-success',
        cancelButtonClass: 'btn btn-danger',
        confirmButtonText: 'Si, eliminar!',
        buttonsStyling: false
      }).then((result) => {
        if (result.value) {
          clickedButton.parents(".delete-form").submit();
        }
      })

      })
      $('#datatable').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Buscar",
        }

      });

      var table = $('#datatable').DataTable();

</script>
@endpush
