# 📦 API REST com PHP Puro + Front-end CRUD

Uma API RESTful desenvolvida completamente em PHP puro (sem frameworks) com front-end em JavaScript vanilla. Ideal para estudos e projetos simples que precisam de um backend leve e funcional.

## 🚀 Tecnologias Utilizadas

### Back-end
- **PHP 8.3+** - Linguagem principal
- **Arquitetura em camadas** - Separation of Concerns
- **Arquivo JSON** - Banco de dados (simples e portátil)
- **CORS configurado** - Para comunicação com front-end

### Front-end
- **HTML5** - Estrutura
- **CSS3** - Estilização
- **JavaScript Vanilla** - Lógica e requisições
- **Fetch API** - Comunicação com backend

## 📁 Estrutura do Projeto
APIPHP/
├── backend/ # API em PHP
│ ├── data/
│ │ └── data.json # Banco de dados (JSON)
│ └── src/
│ ├── config/
│ │ └── config.php # Configurações (CORS, caminhos)
│ ├── public/
│ │ └── index.php # Front-controller (ponto de entrada)
│ ├── api.php # Roteador de métodos HTTP
│ ├── controllers.php # Controladores (recebem requisições)
│ ├── services.php # Camada de negócio (regras)
│ ├── data.php # Camada de dados (arquivo JSON)
│ └── validation.php # Validações de campos
│
└── crud-frontend/ # Front-end (HTML/CSS/JS)
├── src/
│ ├── scripts/
│ │ └── api/
│ │ ├── create.js # Criar usuário (POST)
│ │ ├── read.js # Listar usuários (GET)
│ │ ├── update.js # Atualizar (PUT/PATCH)
│ │ └── delete.js # Deletar (DELETE)
│ ├── dom/
│ │ └── render.js # Renderização da interface
│ ├── styles/
│ │ ├── reset.css
│ │ └── style.css
│ ├── app.js # Lógica principal
│ └── index.html # Página principal
├── compose.yaml # Docker Compose (opcional)
├── Dockerfile # Docker (opcional)
└── README.md # Este arquivo



## 🔧 Instalação e Execução

### Pré-requisitos
- PHP 8.3 ou superior
- Git (opcional)
- Navegador moderno

### Passo a Passo

1. **Clone o repositório**
```bash
git clone https://github.com/seu-usuario/APIPHP.git
        cd APIPHP
        
2. **Inicie o servidor**
        cd backend
php -S localhost:8000 -t src/public