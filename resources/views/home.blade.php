@extends('master')
@section('content')
    
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        color: #333;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    header {
        background-color: #2d2d2d;
        color: #e91e63;
        padding: 20px;
        text-align: center;
    }
    header h1 {
        margin: 0;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        flex: 1;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #e91e63;
        color: white;
    }
    .actions button {
        padding: 5px 10px;
        margin: 0 5px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .btn-increase {
        background-color: #4caf50;
        color: white;
    }
    .btn-decrease {
        background-color: #f44336;
        color: white;
    }
    footer {
        background-color: #2d2d2d;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        border-top: 3px solid #e91e63;
    }
</style>

    <div class="container">
        <h2>Ranking</h2>
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Pontuação</th>
                    <th>Nomenclatura</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>João</td>
                    <td id="score-1">15</td>
                    <td id="title-1">Esquisito Moderado</td>
                    <td class="actions">
                        <button class="btn-increase" onclick="changeScore(1, 1)">+</button>
                        <button class="btn-decrease" onclick="changeScore(1, -1)">-</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Maria</td>
                    <td id="score-2">8</td>
                    <td id="title-2">Iniciante Esquisito</td>
                    <td class="actions">
                        <button class="btn-increase" onclick="changeScore(2, 1)">+</button>
                        <button class="btn-decrease" onclick="changeScore(2, -1)">-</button>
                    </td>
                </tr>
                <!-- Adicione mais linhas conforme necessário -->
            </tbody>
        </table>
    </div>

    <script>
        function changeScore(id, delta) {
            const scoreElement = document.getElementById(`score-${id}`);
            const titleElement = document.getElementById(`title-${id}`);

            // Atualiza a pontuação
            let score = parseInt(scoreElement.textContent, 10);
            score = Math.max(0, score + delta); // Impede valores negativos
            scoreElement.textContent = score;
            
            // Atualiza a nomenclatura com base na pontuação
            let title;
            if (score >= 20) {
                title = "Mestre Esquisito";
            } else if (score >= 10) {
                title = "Esquisito Moderado";
            } else {
                title = "Iniciante Esquisito";
            }
            titleElement.textContent = title;
        }
        </script>

@endsection