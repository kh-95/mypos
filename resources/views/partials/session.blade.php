@if(session('success'))

<script>

new Noty({

type:'success',
layout:'topRight',
text:"{{ session('success')}}",
timeout:4000,
killer:true

}).show();

</script>


@endif