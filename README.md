# 📦 API REST com PHP Puro + Front-end CRUD

[![PHP Version](https://img.shields.io/badge/PHP-8.3+-4F5B93?style=flat-square&logo=php)](https://www.php.net/)
[![License](https://img.shields.io/badge/License-MIT-green?style=flat-square)](LICENSE)
[![Made with ❤️](https://img.shields.io/badge/Made%20with-❤️-red?style=flat-square)](https://github.com)

Uma API RESTful completa desenvolvida em **PHP puro** (sem frameworks) com um front-end moderno em **JavaScript vanilla**. Perfeito para aprender sobre arquitetura em camadas, APIs REST e desenvolvimento full-stack.

---

## ✨ Funcionalidades

✅ **CRUD Completo** - Criar, ler, atualizar e deletar registros  
✅ **API REST** - Endpoints bem estruturados com métodos HTTP  
✅ **Arquitetura em Camadas** - Separação clara de responsabilidades  
✅ **Validação de Dados** - Verificação segura de entrada  
✅ **JSON Database** - Armazenamento leve e portável  
✅ **CORS Configurado** - Comunicação frontend/backend sem problemas  
✅ **Docker Ready** - Já vem com Docker Compose configurado  
✅ **Interface Responsiva** - Design moderno e intuitivo  

---

## 🚀 Tecnologias Utilizadas

### Back-end
- **PHP 8.3+** - Linguagem principal
- **Arquitetura em Camadas** - Controllers → Services → Data
- **JSON** - Database simples e portátil
- **REST API** - Endpoints padronizados
- **CORS** - Configurado para requisições cross-origin

### Front-end
- **HTML5** - Markup semântico
- **CSS3** - Estilização moderna
- **JavaScript Vanilla** - Sem dependências externas
- **Fetch API** - Comunicação assíncrona

---

## 📁 Estrutura do Projeto

```
APIPHP/
├── 📄 README.md
├── 📄 openapi.json
│
├── 📂 backend/                    
│   ├── 📂 data/
│   │   └── 📄 data.json           
│   │
│   └── 📂 src/
│       ├── 📂 config/
│       │   └── 📄 config.php       
│       │
│       ├── 📂 public/
│       │   └── 📄 index.php       
│       │
│       ├── 📄 api.php             
│       ├── 📄 controllers.php       
│       ├── 📄 services.php         
│       ├── 📄 data.php            
│       └── 📄 validation.php       
│
└── 📂 crud-frontend/             
    ├── 📂 src/
    │   ├── 📄 app.js              
    │   ├── 📄 index.html          
    │   │
    │   ├── 📂 scripts/
    │   │   ├── 📂 api/
    │   │   │   ├── 📄 create.js   
    │   │   │   ├── 📄 read.js    
    │   │   │   ├── 📄 update.js  
    │   │   │   └── 📄 delete.js   
    │   │   │
    │   │   └── 📂 dom/
    │   │       └── 📄 render.js   
    │   │
    │   └── 📂 styles/
    │       ├── 📄 reset.css      
    │       └── 📄 style.css        
    │
    ├── 📄 Dockerfile        
    ├── 📄 compose.yaml           
    └── 📄 README.md             
```

---

## 🔧 Instalação e Execução

### Pré-requisitos

- **PHP 8.3+** instalado localmente
- **Docker & Docker Compose** (opcional, para usar containers)
- **Git** (opcional, para clonar)
- Navegador moderno (Chrome, Firefox, Safari, Edge)

### ⚡ Opção 1: Execução Local (Recomendada)

1. **Clone o repositório**
   ```bash
   git clone https://github.com/seu-usuario/APIPHP.git
   cd APIPHP
   ```

2. **Inicie o servidor PHP**
   ```bash
   cd backend
   php -S localhost:8000 -t src/public
   ```
   
   ✅ Servidor rodando em: `http://localhost:8000`

3. **Abra o front-end**
   - Acesse: `http://localhost:8000`
   - A interface já carrega automaticamente

### 🐳 Opção 2: Com Docker Compose

1. **Clone o repositório**
   ```bash
   git clone https://github.com/seu-usuario/APIPHP.git
   cd APIPHP
   ```

2. **Inicie com Docker**
   ```bash
   docker compose up --build
   ```
   
   ✅ Frontend rodando em: `http://localhost:3000`  
   ✅ Backend rodando em: `http://localhost:8000`

3. **Parar os containers**
   ```bash
   docker compose down
   ```

---

## 📖 Como Usar

### Interface do Usuário

A interface é simples e intuitiva:

1. **Adicionar Novo Registro** - Preencha o formulário e clique em "Criar"
2. **Visualizar Registros** - Todos os registros aparecem na tabela
3. **Editar** - Clique no botão "Editar" para modificar um registro
4. **Deletar** - Clique em "Deletar" para remover um registro

### 🔌 Endpoints da API

| Método | Endpoint | Descrição |
|--------|----------|-----------|
| `GET` | `/api/users` | Listar todos os usuários |
| `GET` | `/api/users/{id}` | Obter usuário por ID |
| `POST` | `/api/users` | Criar novo usuário |
| `PUT` | `/api/users/{id}` | Atualizar usuário |
| `PATCH` | `/api/users/{id}` | Atualizar parcialmente |
| `DELETE` | `/api/users/{id}` | Deletar usuário |

### 📝 Exemplo de Requisição

**Criar um usuário (POST)**
```bash
curl -X POST http://localhost:8000/api/users \
  -H "Content-Type: application/json" \
  -d '{
    "name": "João Silva",
    "email": "joao@example.com",
    "age": 25
  }'
```

**Listar usuários (GET)**
```bash
curl http://localhost:8000/api/users
```

**Atualizar usuário (PUT)**
```bash
curl -X PUT http://localhost:8000/api/users/1 \
  -H "Content-Type: application/json" \
  -d '{
    "name": "João Santos",
    "email": "joao.santos@example.com",
    "age": 26
  }'
```

**Deletar usuário (DELETE)**
```bash
curl -X DELETE http://localhost:8000/api/users/1
```

---

## 🏗️ Arquitetura

### Padrão em Camadas

```
Requisição HTTP
       ↓
   [Router] (api.php)
       ↓
 [Controller] (controllers.php)
       ↓
  [Service] (services.php)
       ↓
   [Data Layer] (data.php)
       ↓
  [JSON File] (data.json)
```

- **Controllers**: Recebem requisições e coordenam respostas
- **Services**: Contêm a lógica de negócio e validações
- **Data Layer**: Gerencia leitura/escrita no banco de dados
- **Validation**: Valida dados antes de processar

---

## 🛠️ Desenvolvimento

### Adicionar Novo Endpoint

1. **Crie a action no `controllers.php`**
   ```php
   public function myAction($request) {
       // Sua lógica aqui
   }
   ```

2. **Registre a rota em `api.php`**
   ```php
   case 'my-action':
       $response = $controller->myAction();
       break;
   ```

3. **Crie o método correspondente no front-end (`src/scripts/api/`)**
   ```javascript
   export async function myAction(data) {
       const response = await fetch('/api/my-action', {
           method: 'POST',
           headers: { 'Content-Type': 'application/json' },
           body: JSON.stringify(data)
       });
       return await response.json();
   }
   ```

---

## 📚 Estrutura das Requisições e Respostas

### Formato de Resposta de Sucesso
```json
{
  "success": true,
  "message": "Operação realizada com sucesso",
  "data": { /* dados aqui */ }
}
```

### Formato de Resposta de Erro
```json
{
  "success": false,
  "message": "Descrição do erro",
  "errors": { /* detalhes de erro */ }
}
```

---

---

## 📋 Checklist de Funcionalidades

- [x] CRUD completo
- [x] Validação de dados
- [x] Arquitetura em camadas
- [x] Resposta padronizada
- [x] CORS configurado
- [x] Docker Compose
- [x] Interface responsiva

---

## 🐛 Troubleshooting

### Porta 8000 já está em uso
```bash
# Use outra porta
php -S localhost:3000 -t src/public
```

### Erro de CORS
Verifique `backend/src/config/config.php` e confirme que o domínio está autorizado.

### Problemas com Docker
```bash
# Limpe containers antigos
docker compose down -v
docker compose up --build
```


---


Obrigado por usar este projeto! Se você achar útil, deixe uma ⭐ no GitHub.

---

**Última atualização:** Março de 2026
