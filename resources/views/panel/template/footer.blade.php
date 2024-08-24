<footer class="main-footer">
    <strong>Copyright &copy; 2023 - {{ date("Y")  }} <a href="https://sticon.co.mz">{{ env("APP_NAME") }} - STICON LDA</a>.</strong>
    Todos os Direitos Reservados.
    <div class="float-right d-none d-sm-inline-block">
      <b>Versão</b> {{ $branch ?? "Sem Versão"}}
    </div>
  </footer>
