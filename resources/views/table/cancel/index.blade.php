@extends('layout.master')
@section('content')
<div>
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->last }}</td>
                <td>{{ $user->twitter }}</td>
                <td>
                    <form action="{{ route('table.cancel.destroy', ['id' => $user->id ]) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger submit-alert">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>
<a href="{{ route('home')}}" class="btn btn-info btn-lg">Back</a>
@endsection
@push('script')
@include('js-utilities::form.click-alert', ['msgTitle' => 'Eliminar usuario?'])
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script>
  /*
    function warningMsg(e) {
       e.preventDefault();
       let target = this;
        Swal.fire({
            title: "{{ $title ?? 'Estas seguro?'}}",
            text: "{{ $msg ?? 'No podras revertir esta accion!'}}",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "{{$btnConfirm ?? 'Si'}}",
            cancelButtonText: "{{$btnCancel ?? 'Cancelar'}}"
        }).then((result) => {
        if (result.value) {
            let tr = target.closest('tr')
            tr.parentNode.removeChild(tr);
            //console.log(target.closest('tr').parentNode)
            //target.closest('form').submit()
        }
        })
    }

    const btn = document.getElementsByClassName('delete')
    const lenght = btn.length;

    for (let index = lenght; index > 0; index--) {
        btn[index - 1].addEventListener('click', warningMsg, false)
    }



    function clickeaste() {
        console.log(this.dataset.id)
    }

    function AjaxDestroy(e) {
       e.preventDefault();
       let target = this;
        Swal.fire({
            title: "{{ $title ?? 'Estas seguro?'}}",
            text: "{{ $msg ?? 'No podras revertir esta accion!'}}",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "{{$btnConfirm ?? 'Si'}}",
            cancelButtonText: "{{$btnCancel ?? 'Cancelar'}}"
        }).then((result) => {
        if (result.value) {
            let tr = target.closest('tr')
            tr.parentNode.removeChild(tr);
        }
        })
    }

*/




</script>
@endpush

