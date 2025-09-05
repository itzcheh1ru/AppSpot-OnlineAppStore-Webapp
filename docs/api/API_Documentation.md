# AppSpot API Documentation

## Overview
The AppSpot API provides endpoints for managing applications, user authentication, and contact inquiries.

## Base URL
```
http://localhost/appspot/api/
```

## Authentication
Currently using session-based authentication. Future versions will implement JWT tokens.

## Endpoints

### User Management
- `POST /auth/login` - User login
- `POST /auth/register` - User registration
- `GET /auth/logout` - User logout
- `GET /user/profile` - Get user profile

### Application Management
- `GET /apps` - Get all applications
- `GET /apps/{id}` - Get specific application
- `GET /apps/category/{category}` - Get apps by category
- `POST /apps/search` - Search applications

### Contact System
- `POST /contact/inquiry` - Submit contact inquiry
- `GET /contact/resources` - Get help resources

## Response Format
All API responses follow this format:
```json
{
    "status": "success|error",
    "message": "Response message",
    "data": {},
    "timestamp": "2024-01-01T00:00:00Z"
}
```

## Error Codes
- `400` - Bad Request
- `401` - Unauthorized
- `404` - Not Found
- `500` - Internal Server Error
