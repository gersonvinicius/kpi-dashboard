async function carregarKPIs() {
    const container = document.getElementById('kpi-container');
    container.innerHTML = 'Carregando...';

    try {
        const response = await fetch('/api/v1/kpis');
        const kpis = await response.json();

        container.innerHTML = '';

        kpis.forEach(kpi => {
            const positivo = kpi.variacao_percentual >= 0;
            const icone = positivo ? '↑' : '↓';
            const cor = positivo ? 'text-green-600' : 'text-red-600';

            const card = `
                <div class="bg-white shadow rounded-xl p-5 w-full sm:w-1/2 lg:w-1/4 transition hover:scale-105">
                    <div class="text-sm text-gray-500 mb-1">${kpi.titulo}</div>
                    <div class="text-2xl font-bold text-gray-800">${Number(kpi.valor).toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' })}</div>
                    <div class="text-sm ${cor}">${icone} ${kpi.variacao_percentual.toFixed(1).replace('.', ',')}%</div>
                </div>
            `;

            container.innerHTML += card;
        });

        const data = new Date();
        document.getElementById('kpi-last-update').textContent =
            `Última atualização: ${data.toLocaleString('pt-BR')}`;
    } catch (error) {
        container.innerHTML = `<p class="text-red-600">Erro ao carregar KPIs.</p>`;
        console.error(error);
    }
}

carregarKPIs();
setInterval(carregarKPIs, 30000);