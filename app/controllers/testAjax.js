$(document).ready(
    function() {
        console.log('im here');
        let redirect = document.querySelector('.click');
        redirect.addEventListener('click',()=> {
            console.log(window.location);
            $.ajax(
                {
                    type:'POST',
                    url:'./app/models/includes/inc_test.php',
                }
            ).done(function(res) {
                $('.aj').html(res);
                console.log(res);
            })
        })
    }
)