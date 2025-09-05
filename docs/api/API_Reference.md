# AppSpot API Endpoints

## Base URL
```
http://localhost:8080/api/v1/
```

## Authentication
All protected endpoints require a valid session token.

## Endpoints

### User Management

#### POST /auth/register
Register a new user account.

**Request Body:**
```json
{
  "username": "string",
  "email": "string",
  "password": "string",
  "first_name": "string",
  "last_name": "string"
}
```

**Response:**
```json
{
  "status": "success",
  "message": "User registered successfully",
  "data": {
    "user_id": 123,
    "username": "newuser"
  }
}
```

#### POST /auth/login
Authenticate user and create session.

**Request Body:**
```json
{
  "username": "string",
  "password": "string"
}
```

**Response:**
```json
{
  "status": "success",
  "message": "Login successful",
  "data": {
    "user_id": 123,
    "username": "user",
    "session_token": "abc123..."
  }
}
```

#### POST /auth/logout
End user session.

**Response:**
```json
{
  "status": "success",
  "message": "Logged out successfully"
}
```

### Application Management

#### GET /apps
Get all applications with pagination.

**Query Parameters:**
- `page` (optional): Page number (default: 1)
- `limit` (optional): Items per page (default: 20)
- `category` (optional): Filter by category

**Response:**
```json
{
  "status": "success",
  "data": {
    "apps": [
      {
        "id": 1,
        "name": "Outlook",
        "category": "Business",
        "description": "Email and calendar management",
        "rating": 4.5,
        "install_count": 1000000,
        "image_url": "/assets/images/outlook.png"
      }
    ],
    "pagination": {
      "current_page": 1,
      "total_pages": 10,
      "total_items": 200
    }
  }
}
```

#### GET /apps/{id}
Get specific application details.

**Response:**
```json
{
  "status": "success",
  "data": {
    "id": 1,
    "name": "Outlook",
    "category": "Business",
    "description": "Email and calendar management",
    "developer": "Microsoft",
    "version": "1.0.0",
    "file_size": "50MB",
    "rating": 4.5,
    "install_count": 1000000,
    "image_url": "/assets/images/outlook.png",
    "download_link": "https://example.com/outlook.apk"
  }
}
```

#### GET /apps/category/{category}
Get applications by category.

**Response:**
```json
{
  "status": "success",
  "data": {
    "category": "Business",
    "apps": [...]
  }
}
```

#### POST /apps/search
Search applications.

**Request Body:**
```json
{
  "query": "string",
  "category": "string (optional)",
  "page": 1,
  "limit": 20
}
```

**Response:**
```json
{
  "status": "success",
  "data": {
    "query": "outlook",
    "results": [...],
    "pagination": {...}
  }
}
```

### User Applications

#### GET /user/apps
Get user's installed applications.

**Response:**
```json
{
  "status": "success",
  "data": {
    "installed_apps": [
      {
        "app_id": 1,
        "app_name": "Outlook",
        "installed_at": "2024-01-01T00:00:00Z"
      }
    ]
  }
}
```

#### POST /user/apps/install
Install an application.

**Request Body:**
```json
{
  "app_id": 1
}
```

**Response:**
```json
{
  "status": "success",
  "message": "Application installed successfully"
}
```

### Contact System

#### POST /contact/inquiry
Submit contact inquiry.

**Request Body:**
```json
{
  "message": "string",
  "email": "string (optional)",
  "subject": "string (optional)"
}
```

**Response:**
```json
{
  "status": "success",
  "message": "Inquiry submitted successfully",
  "data": {
    "inquiry_id": 123
  }
}
```

## Error Responses

### 400 Bad Request
```json
{
  "status": "error",
  "message": "Invalid request data",
  "errors": {
    "username": ["Username is required"],
    "email": ["Invalid email format"]
  }
}
```

### 401 Unauthorized
```json
{
  "status": "error",
  "message": "Authentication required"
}
```

### 404 Not Found
```json
{
  "status": "error",
  "message": "Resource not found"
}
```

### 500 Internal Server Error
```json
{
  "status": "error",
  "message": "Internal server error"
}
```

## Rate Limiting
- 100 requests per minute per IP
- 1000 requests per hour per authenticated user

## API Versioning
- Current version: v1
- Version specified in URL: `/api/v1/`
- Backward compatibility maintained for 6 months
