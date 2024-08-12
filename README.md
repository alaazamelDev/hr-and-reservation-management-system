# HR and Reservation Management System API

| | |
|-|-| 
|![Dashboard & Statistics](https://github.com/alaazamelDev/hr-consultation-management/blob/main/preview/dashboard_preview.png?raw=true)|![Customer Profile Preview](https://github.com/alaazamelDev/hr-consultation-management/blob/main/preview/customer_preview.png?raw=true)|
|<div align="center">Dashboard & Statistics</div>|<div align="center">Customer Profile Preview</div>|
|![Consultant Timesheet](https://github.com/alaazamelDev/hr-consultation-management/blob/main/preview/time_sheet.png?raw=true)|![Add Job Application From](https://github.com/alaazamelDev/hr-consultation-management/blob/main/preview/job_application.png?raw=true)|  
|<div align="center">Consultant Timesheet</div>|<div align="center">Add Job Application From</div>|

## Overview

This API provides the backend and integrations for an HR and Consultation Management application used by QIAM Center. It handles user management, permissions, HR functions like recruitment and attendance tracking as well as a consultation booking system. 

The API is built using:

- Laravel
- MySQL
- Firebase Cloud Messaging
- Email APIs

The repo contains the full API code as well as documentation.

## Features

- User authentication and permissions management
- Recruitment and applicant tracking 
- Employee profiles, attendance, leave tracking
- Role-based access control
- Consultant schedules and availability
- Customer appointment booking system
- Push notifications and email integrations

## Documentation

The full API documentation can be found at:

- [HR Module Documentation][hr-docs]

- [Consultation Module Documentation][consult-docs]

[hr-docs]: https://documenter.getpostman.com/view/10175953/2s93eZyrzB
[consult-docs]: https://documenter.getpostman.com/view/27451041/2s9XxyQYSw

## Usage

To use the API:

1. Clone the repository
2. Configure your database credentials and API keys in `.env`
3. Run `composer install`
4. Run migrations:

   - Basic migrations:
    
       ```bash
       php artisan migrate
       ```

   - HR module migrations:
   
       ```bash  
       php artisan migrate --path=database/migrations/HR
       ```
       
   - CD module migrations:
   
       ```bash
       php artisan migrate --path=database/migrations/CD
       ```
5. Seed database:

   ```bash
   php artisan db:seed

6. Run `php artisan serve` to run the API locally

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)

Let me know if you would like me to modify or expand this README further. I aimed to create a professional, high-quality README showcasing the key information about the project in a concise and appealing way.
