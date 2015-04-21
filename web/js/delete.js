/**
 * Created by T0139828 on 02/03/2015.
 */
$(function(){
    $('.resList').on('click','a.delete',function(){
        if(confirm('Êtes-vous sûre ?')) {

            var onSuccessAction = this.getAttribute('data-on-success-action');
            $.ajax(
                {
                    url: this.getAttribute('data-on-click-href'),
                    type: 'DELETE',
                    async: false,
                    complete: function (response, status) {
                        if (status != 'success') {
                            alert('La suppression a échouée !')
                        } else {
                            if(typeof delete_callback !== 'undefined' && $.isFunction(delete_callback))
                            {
                                delete_callback();
                            }
                        }
                    }
                }
            )
        }
        return false
    })
})