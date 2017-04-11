<div class="modal fade modal-slide-in-right" aria-hidden="true"
role="dialog" tabindex="-1" id="modal-delete-{{$cat->idcategoria}}">
    {{Form::Open(array('action'=>array('CategoriaController@destroy',$cat->idcategoria), 'method'=>'delete'))}}
    <div class="modal-dialog">
        <div class ="modal-content" >
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"
                    aria-Lavel="Close">
                    <span aria-hidden="true">x</span>
                    
                </button>
                <h4 class="modal-title">Eliminar Categoria</h4>
                
            </div>
            <div class="modal-body">
                <p>Confirme si desea Eliminar la Categoria</p>
                
            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal">Cerrar</button>
                <button class="btn btn-primary" type="submit">Confirmar</button>                    
            </div>
            
        </div>
        
    </div>
    
    {{Form::Close()}}
</div>