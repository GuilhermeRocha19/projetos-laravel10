<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session()->has('sucess'))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire("Concluído!", "{{ session('sucess') }}", "success");
        })
    </script>
@endif

@if (session('error'))
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            Swal.fire("Erro!", "{{ session('error') }}", "error");
        })
    </script>
@endif

@if ($errors->any())
    @php 
        $mensagem = '';
        foreach ($errors->all() as $error){
            $mensagem .= $error. '<br>';
        }     
    @endphp

<script>
    document.addEventListener('DOMContentLoaded', () => {
        Swal.fire("Erro!", "{!! $mensagem !!}" , "error");
    })
</script>
  
@endif
