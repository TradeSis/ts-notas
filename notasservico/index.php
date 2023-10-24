<?php
// lucas 11102023 novo padrao
include_once(__DIR__ . '/../header.php');
include_once(__DIR__ . '/../database/notasservico.php');
include_once(ROOT . '/cadastros/database/clientes.php');

$clientes = buscaClientes();
?>
<!doctype html>
<html lang="pt-BR">

<head>

    <?php include_once ROOT . "/vendor/head_css.php"; ?>

</head>

<body>
    <div class="container-fluid">
        <!-- MENUFILTROS -->
        <nav class="ts-menuFiltros">
            <label class="pl-2" for="">Filtrar por:</label>
            <div class="col-12">
                <form class="d-flex" action="" method="post">
                    <select class="form-control" name="idCliente" id="FiltroClientes">
                        <option value="<?php echo null ?>"><?php echo "Cliente"  ?></option>
                        <?php
                        foreach ($clientes as $cliente) {
                        ?>
                            <option <?php
                                    /*  if ($cliente['idCliente'] == $idCliente) {
                                        echo "selected";
                                    } */
                                    ?> value="<?php echo $cliente['idCliente'] ?>"><?php echo $cliente['nomeCliente']  ?></option>
                        <?php  } ?>
                    </select>
                </form>
            </div>
            <div class="col-12">
                <form class="d-flex" action="" method="post">
                    <select class="form-control" name="statusNota" id="FiltroStatusNota">
                        <option value="<?php echo null ?>"><?php echo "statusNota"  ?></option>
                        <option value="0">Aberto</option>
                        <option value="1">Emitida</option>
                        <option value="2">Recebida</option>
                        <option value="3">Cancelada</option>
                    </select>
                </form>
            </div>


            <div class="col-sm text-end mt-2">
                <a onClick="limpar()" role=" button" class="btn btn-sm bg-info text-white">Limpar</a>
            </div>
        </nav>

        <div class="row">
            <BR> <!-- MENSAGENS/ALERTAS -->
        </div>
        <div class="row">
            <BR> <!-- BOTOES AUXILIARES -->
        </div>
        <div class="row">
            <div class="col-6 order-1 col-sm-6  col-md-6 order-md-1 col-lg-1 order-lg-1 mt-3">
                <button type="button" class="ts-btnFiltros btn btn-sm"><span class="material-symbols-outlined">
                        filter_alt
                    </span></button>

            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-2 order-lg-2 mt-4">
                <h2 class="ts-tituloPrincipal">Notas Serviço</h2>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-5 order-lg-3">
                <div class="input-group">
                    <input type="text" class="form-control ts-input mt-4" id="buscanotas" placeholder="Buscar por id ou numero da nota">
                    <span class="input-group-btn">
                        <button class="btn btn-primary mt-4" id="buscar" type="button"><span style="font-size: 20px;font-family: 'Material Symbols Outlined'!important;" class="material-symbols-outlined">
                                search
                            </span></button>
                    </span>
                </div>
            </div>


            <div class="col-6 order-2 col-sm-6 col-md-6 order-md-2 col-lg-4 order-lg-4 mt-3 text-end" style=" margin-left:-30px ">
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#inserirModal"><i class="bi bi-plus-square"></i>&nbsp Novo</button>
            </div>
        </div>

        <div class="table mt-2 ts-divTabela ts-tableFiltros">
            <table class="table table-hover table-sm">
                <thead class="ts-headertabelafixo">
                    <tr>
                        <th>idNotaServico</th>
                        <th>idCliente</th>
                        <th>dataFaturamento</th>
                        <th>dataEmissao</th>
                        <th>serieNota</th>
                        <th>numeroNota</th>
                        <th>serieRPS</th>
                        <th>numeroRPS</th>
                        <th>valorNota</th>
                        <th>statusNota</th>
                        <th>condicao</th>
                        <th colspan="2">Ação</th>
                    </tr>
                </thead>

                <tbody id='dados' class="fonteCorpo">

                </tbody>
            </table>
        </div>



        <!--------- INSERIR --------->
        <div class="modal fade bd-example-modal-lg" id="inserirModal" tabindex="-1" aria-labelledby="inserirModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Inserir Nota</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="inserirFormNotaServico">
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <label class="form-label ts-label">Cliente</label>
                                    <select class="form-select ts-input" name="idCliente">
                                        <?php
                                        foreach ($clientes as $cliente) {
                                        ?>
                                            <option value="<?php echo $cliente['idCliente'] ?>"><?php echo $cliente['nomeCliente'] ?></option>
                                        <?php  } ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label class='form-label ts-label'>dataFaturamento</label>
                                    <input type="date" class="form-control ts-input" name="dataFaturamento" autocomplete="off" required>
                                </div>
                                <div class="col-md-3">
                                    <label class='form-label ts-label'>dataEmissao</label>
                                    <input type="date" class="form-control ts-input" name="dataEmissao" autocomplete="off">
                                </div>

                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class='form-label ts-label'>serieNota</label>
                                    <input type="text" class="form-control ts-input" name="serieNota" autocomplete="off">
                                </div>
                                <div class="col-md-6">
                                    <label class='form-label ts-label'>numeroNota</label>
                                    <input type="text" class="form-control ts-input" name="numeroNota" autocomplete="off">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label class='form-label ts-label'>serieRPS</label>
                                    <input type="text" class="form-control ts-input" name="serieRPS" autocomplete="off">
                                </div>
                                <div class="col-md-3">
                                    <label class='form-label ts-label'>numeroRPS</label>
                                    <input type="text" class="form-control ts-input" name="numeroRPS" autocomplete="off">
                                </div>
                                <div class="col-md-3">
                                    <label class='form-label ts-label'>valorNota</label>
                                    <input type="text" class="form-control ts-input" name="valorNota" autocomplete="off" required>
                                </div>
                                <div class="col-md-3 form-group-select">
                                    <label class="form-label ts-label">statusNota</label>
                                    <select class="form-select ts-input" name="statusNota" autocomplete="off" required>
                                        <option value="0">Aberto</option>
                                        <option value="1">Emitida</option>
                                        <option value="2">Recebida</option>
                                        <option value="3">Cancelada</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class='form-label ts-label'>condicao</label>
                                    <input type="text" class="form-control ts-input" name="condicao" autocomplete="off">
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <div class="card-footer bg-transparent text-end">
                            <button type="submit" class="btn btn-success">Cadastrar</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <!--------- ALTERAR --------->
        <div class="modal fade bd-example-modal-lg" id="alterarmodal" tabindex="-1" aria-labelledby="alterarmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Alterar Nota</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" id="alterarFormNotaServico">
                            <div class="row mt-3">
                                <div class="col-md-2">
                                    <label class="form-label ts-label">idNotaServico</label>
                                    <input type="text" class="form-control ts-input" id="idNotaServico" name="idNotaServico" readonly>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label ts-label">Cliente</label>
                                    <input type="text" class="form-control ts-input" name="nomeCliente" id="nomeCliente" disabled>
                                    <input type="hidden" class="form-control ts-input" name="idCliente" id="idCliente">
                                </div>
                                <div class="col-md-3">
                                    <label class='form-label ts-label'>dataFaturamento</label>
                                    <input type="date" class="form-control ts-input" name="dataFaturamento" id="dataFaturamento" required>
                                </div>
                                <div class="col-md-3">
                                    <label class='form-label ts-label'>dataEmissao</label>
                                    <input type="date" class="form-control ts-input" name="dataEmissao" id="dataEmissao">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-6">
                                    <label class='form-label ts-label'>serieNota</label>
                                    <input type="text" class="form-control ts-input" name="serieNota" id="serieNota">
                                </div>
                                <div class="col-md-6">
                                    <label class='form-label ts-label'>numeroNota</label>
                                    <input type="text" class="form-control ts-input" name="numeroNota" id="numeroNotabd">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label class='form-label ts-label'>serieRPS</label>
                                    <input type="text" class="form-control ts-input" name="serieRPS" id="serieRPS">
                                </div>
                                <div class="col-md-3">
                                    <label class='form-label ts-label'>numeroRPS</label>
                                    <input type="text" class="form-control ts-input" name="numeroRPS" id="numeroRPS">
                                </div>
                                <div class="col-md-3">
                                    <label class='form-label ts-label'>valorNota</label>
                                    <input type="text" class="form-control ts-input" name="valorNota" id="valorNota" required>
                                </div>

                                <div class="col-md-3">
                                    <label class='form-label ts-label'>statusNota</label>
                                    <select class="form-select ts-input" name="statusNota" id="statusNota">
                                        <option value="0">Aberto</option>
                                        <option value="1">Emitida</option>
                                        <option value="2">Recebida</option>
                                        <option value="3">Cancelada</option>
                                    </select>
                                </div>

                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label class='form-label ts-label'>condicao</label>
                                    <input type="text" class="form-control ts-input" name="condicao" id="condicao">
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <div class="card-footer bg-transparent text-end">
                            <button type="submit" class="btn btn-success">Salvar</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div><!--container-fluid-->

    <!-- LOCAL PARA COLOCAR OS JS -->

    <?php include_once ROOT . "/vendor/footer_js.php"; ?>
    <!-- script para menu de filtros -->
    <script src="<?php echo URLROOT ?>/sistema/js/filtroTabela.js"></script>

    <script>
        buscar($("#FiltroClientes").val(), $("#buscanotas").val(), $("#FiltroStatusNota").val());

        function limpar() {
            buscar(null, null, null, null);
            window.location.reload();
        }

        function buscar(idCliente, buscanotas, statusNota) {
            //alert (buscanotas);
            $.ajax({
                type: 'POST',
                dataType: 'html',
                url: '<?php echo URLROOT ?>/notas/database/notasservico.php?operacao=filtrar',
                beforeSend: function() {
                    $("#dados").html("Carregando...");
                },
                data: {
                    idCliente: idCliente,
                    buscanotas: buscanotas,
                    statusNota: statusNota
                },
                success: function(msg) {

                    var json = JSON.parse(msg);
                    var linha = "";
                    for (var $i = 0; $i < json.length; $i++) {
                        var object = json[$i];

                        function formatDate(dateString) {
                            if (dateString !== null && !isNaN(new Date(dateString))) {
                                var date = new Date(dateString);
                                var day = date.getUTCDate().toString().padStart(2, '0');
                                var month = (date.getUTCMonth() + 1).toString().padStart(2, '0');
                                var year = date.getUTCFullYear().toString().padStart(4, '0');
                                return day + "/" + month + "/" + year;
                            }
                            return "00/00/0000";
                        }

                        var dataFaturamentoFormatada = formatDate(object.dataFaturamento);
                        var dataEmissaoFormatada = formatDate(object.dataEmissao);

                        if (object.statusNota == 0) {
                            var novoStatusNota = "Aberto";
                        }
                        if (object.statusNota == 1) {
                            var novoStatusNota = "Emitida";
                        }
                        if (object.statusNota == 2) {
                            var novoStatusNota = "Recebida";
                        }
                        if (object.statusNota == 3) {
                            var novoStatusNota = "Cancelada";
                        }

                        linha = linha + "<tr>";
                        linha = linha + "<td>" + object.idNotaServico + "</td>";
                        linha = linha + "<td>" + object.nomeCliente + "</td>";
                        linha = linha + "<td>" + dataFaturamentoFormatada + "</td>";
                        linha = linha + "<td>" + dataEmissaoFormatada + "</td>";
                        linha = linha + "<td>" + object.serieNota + "</td>";
                        linha = linha + "<td>" + object.numeroNota + "</td>";
                        linha = linha + "<td>" + object.serieRPS + "</td>";
                        linha = linha + "<td>" + object.numeroRPS + "</td>";
                        linha = linha + "<td>" + object.valorNota + "</td>";
                        linha = linha + "<td>" + novoStatusNota + "</td>";
                        linha = linha + "<td>" + object.condicao + "</td>";
                        linha = linha + "<td>" + "<button type='button' class='btn btn-warning btn-sm' data-bs-toggle='modal' data-bs-target='#alterarmodal' data-idNotaServico='" + object.idNotaServico + "'><i class='bi bi-pencil-square'></i></button>"
                        linha = linha + "</tr>";
                    }
                    $("#dados").html(linha);
                }
            });
        }

        $("#FiltroClientes").change(function() {
            buscar($("#FiltroClientes").val(), $("#buscanotas").val(), $("#FiltroStatusNota").val());
        })

        $("#buscar").click(function() {
            buscar($("#FiltroClientes").val(), $("#buscanotas").val(), $("#FiltroStatusNota").val());
        })

        $("#FiltroStatusNota").change(function() {
            buscar($("#FiltroClientes").val(), $("#buscanotas").val(), $("#FiltroStatusNota").val());
        })

        document.addEventListener("keypress", function(e) {
            if (e.key === "Enter") {
                buscar($("#FiltroClientes").val(), $("#buscanotas").val(), $("#FiltroStatusNota").val());
            }
        });

        $(document).on('click', 'button[data-bs-target="#alterarmodal"]', function() {
            var idNotaServico = $(this).attr("data-idNotaServico");
            //alert(idNotaServico)
            $.ajax({
                type: 'POST',
                dataType: 'json',
                url: '<?php echo URLROOT ?>/notas/database/notasservico.php?operacao=buscar',
                data: {
                    idNotaServico: idNotaServico
                },
                success: function(data) {
                    $('#idNotaServico').val(data.idNotaServico);
                    $('#idCliente').val(data.idCliente);
                    $('#nomeCliente').val(data.nomeCliente);
                    $('#dataFaturamento').val(data.dataFaturamento);
                    $('#dataEmissao').val(data.dataEmissao);
                    $('#serieNota').val(data.serieNota);
                    $('#numeroNotabd').val(data.numeroNota);
                    $('#serieRPS').val(data.serieRPS);
                    $('#numeroRPS').val(data.numeroRPS);
                    $('#valorNota').val(data.valorNota);
                    $('#statusNota').val(data.statusNota);
                    $('#condicao').val(data.condicao);
                    /* alert(data) */
                    $('#alterarmodal').modal('show');
                }
            });
        });




        var inserirModal = document.getElementById("inserirModal");

        var inserirBtn = document.querySelector("button[data-bs-target='#inserirModal']");

        inserirBtn.onclick = function() {
            inserirModal.style.display = "block";
        };

        window.onclick = function(event) {
            if (event.target == inserirModal) {
                inserirModal.style.display = "none";
            }
        };
    </script>

    <script>
        $(document).ready(function() {
            $("#inserirFormNotaServico").submit(function(event) {
                event.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "../database/notasservico.php?operacao=inserir",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: refreshPage,
                });
            });

            $("#alterarFormNotaServico").submit(function(event) {
                event.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url: "../database/notasservico.php?operacao=alterar",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: refreshPage,
                });
            });

            function refreshPage() {
                window.location.reload();
            }
        });
    </script>

    <!-- LOCAL PARA COLOCAR OS JS -FIM -->

</body>

</html>