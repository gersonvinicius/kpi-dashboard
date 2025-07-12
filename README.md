# 📊 KPI Dashboard

Sistema completo de visualização de KPIs desenvolvido com Laravel 12.20 e Docker, seguindo princípios profissionais como Clean Code, SOLID e arquitetura escalável.

---

## 🚀 Tecnologias Utilizadas

- **Backend:** Laravel 12.20 (PHP 8.1+)
- **Frontend:** Blade + Tailwind + Vite
- **Containerização:** Docker + Laravel Sail
- **Banco de Dados:** SQLite
- **Padrões:** SOLID, Clean Code, DTO, Repositórios, Services
- **Versionamento:** Git + GitHub

---

## 📂 Estrutura do Projeto

- `app/Http/Controllers/Api/V1/`: Controladores da API
- `app/Services/`: Camada de regras de negócio
- `app/Repositories/`: Acesso a dados com interface e implementação separadas
- `app/DTOs/`: Transferência estruturada de dados (Data Transfer Object)
- `routes/api.php`: Rotas da API versionada
- `resources/views/dashboard.blade.php`: Interface visual do sistema

---

## 🔐 Funcionalidades

- Autenticação de usuários com login, registro e recuperação de senha
- Dashboard dinâmico com KPIs
- API RESTful em `/api/V1/kpis`
- Seeders com dados simulados
- Código limpo e estruturado para fácil manutenção e escalabilidade

---

## 🛠️ Como rodar o projeto

### 1. Clonar o repositório

```bash
git clone https://github.com/gersonvinicius/kpi-dashboard.git
cd kpi-dashboard
```

### 2. Subir os containers

```bash
./vendor/bin/sail up -d
```

### 3. Rodar as migrations

```bash
sail artisan migrate
```

### 4. Popular o banco com dados de exemplo

```bash
sail artisan db:seed
```

### 5. Acessar a aplicação

- Interface: http://localhost
- API: http://localhost/api/v1/kpis

---

## 🧪 Testes

```bash
sail artisan test
```

---

## 💡 Melhorias Futuras

- Gráficos com bibliotecas JS (ex: Chart.js)
- Filtros por período e categoria nos KPIs
- Suporte a múltiplos usuários com dashboards personalizados
- Banco de dados relacional (MySQL/PostgreSQL)
- Deploy automático com CI/CD

---
