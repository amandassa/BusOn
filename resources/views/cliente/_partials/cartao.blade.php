@extends('pagamento')

@section('formulario')
    <form>
        <div class="form-group">
            <div class="container">
                <div class="row">
                    <div class="col-sm">
                        <label>Número do Cartão:</label>
                            <input type="number" class="form-control" id="numero_cartao" placeholder="_ _ _ _  _ _ _ _  _ _ _ _  _ _ _ _">
                    </div>
                </div>
            </div>                
        </div>
    </form>
@endsection