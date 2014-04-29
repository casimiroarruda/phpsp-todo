<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="javascript/semantic.min.js"></script>
<script>
    var ToDo = {
        'done':function(id){
            $('#task-id').val(id);
            $('#change-task').attr('action','/task/done').submit()
        },
        'undone':function(id){
            $('#task-id').val(id);
            $('#change-task').attr('action','/task/undone').submit()
        }
    };
    $(function () {
        $('.ui.message i.close.icon').on('click', function () {
            $('.ui.message').hide();
        });
        $('#task-list :checkbox').each(function(index,obj){
            $(obj).on('change',function(){
                var id = $(this).attr('id').replace('done-','')
                var method = (this.checked)?'done':'undone';
                ToDo[method](id);
            })
        });
    })
</script>