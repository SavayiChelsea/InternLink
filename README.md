# InternLink: A website that connects Kenyan University students with Internship Opportunities
## Introduction
internLink is a web platform designed to connect university students with valuable internship opportunities. It facilitates a seamless interaction between students looking for internships and employers offering them.

## Features

- **Student Registration and Profile Management**: Students can create and manage their profiles, showcasing their skills, education, and experiences.
- **Employer Registration and Job Posting**: Employers can register and post internship opportunities, specifying required skills, duration, and other relevant details.
- **Internship Search and Application**: Students can search for internships based on various filters and apply for positions directly through the platform.
- **Dashboard**: Both students and employers have personalized dashboards. Students can view applied internships, while employers can manage posted internships and view applications.

## Tech Stack

- **Backend**: Laravel 11
- **Frontend**: Blade Templates, HTML, CSS, JavaScript
- **Database**: MySQL
- **Version Control**: Git

## Installation

### Prerequisites

- PHP 7.4 or higher
- Composer
- MySQL
- Node.js and npm

### Steps

1. **Clone the repository**:
    ```sh
    git clone https://github.com/SavayiChelsea/InternLink.git
    cd internLink
    ```

2. **Install dependencies**:
    ```sh
    composer install
    npm install
    npm run dev
    ```

3. **Environment configuration**:
    - Copy the `.env.example` file to `.env`:
        ```sh
        cp .env.example .env
        ```
    - Update the `.env` file with your database credentials and other settings.

4. **Generate application key**:
    ```sh
    php artisan key:generate
    ```

5. **Run database migrations**:
    ```sh
    php artisan migrate
    ```

6. **Serve the application**:
    ```sh
    php artisan serve
    ```

    Your application should now be running on [http://localhost:8000](http://localhost:8000).

## Usage

- **Student**: Register, complete your profile, search and apply for internships.
- **Employer**: Register, post internship opportunities, manage postings, and review applications.

## Contributing

We welcome contributions! Please fork the repository and create a pull request with your changes. Make sure to follow the coding conventions and write tests for new functionalities.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

For any inquiries or support, please reach out to [savayichelsea90@gmail.com, nicolemoraa54@gmail.com].

---

Thank you for using internLink! Together, we can help students gain valuable work experience and employers find talented interns.

