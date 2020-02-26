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
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>
                <form action="{{ route('table.cancel.destroy', ['id' => 1]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger submit-alert">Delete</button>
                </form>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>
                <form action="{{ route('table.cancel.destroy', ['id' => 3]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger submit-alert">Delete</button>
                </form>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>
                <form action="{{ route('table.cancel.destroy', ['id' => 5]) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger submit-alert">Delete</button>
                </form>
            </td>
          </tr>
        </tbody>
      </table>
</div>
@endsection
@push('script')
@include('js-utilities::submit-alert', ['msgTitle' => 'Eliminar usuario?'])
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

