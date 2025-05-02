# Radio amateur toolkit

This app is a toolkit for radio amateurs, both for experienced users and those who are studying for a license.
It contains many tools useful for radio operations, such as antenna calculators or lists of Q-codes.
Additionally, it includes tools for unlicensed users who are preparing for an exam.

## Table of Contents

- [About the Project](#about-the-project)
    - [Built With](#built-with)
- [Getting Started](#getting-started)
    - [Prerequisites](#prerequisites)
    - [Installation](#installation)
- [Roadmap](#roadmap)
- [Contributing](#contributing)
- [License](#license)

## About The Project

This app is a must-have for every radio amateur. It contains many useful tools, like:
- Antenna calculators
  - J-pole
  - Dipole
  - Yagi
  - ...
- List of Qrs-codes
- Table of RST-reports
- Polish band plan (and possibly for other countries in the future)
- and many more!

For those preparing for an exam:
- List of questions from the Polish exam for radio amateurs
- Q-codes and RST-reports learning tool
- Exam simulator


### Built With

List the technologies or frameworks used in the project, for example:
- [Symfony](https://symfony.com/)
- [PHP](https://www.php.net/)
- [Docker](https://www.docker.com/)
- [MySQL](https://www.mysql.com/)
- [Nginx](https://www.nginx.com/)

## Getting Started

### Prerequisites

- Docker and Docker compose

### Installation

1. Clone the repo:
   ```sh
   git clone https://github.com/your_username/your_repository.git
   ```
2. Enter the project directory:
   ```sh
   cd your_repository
   ```
   
3. Prepare the `.env` file:
   1. Rename `.env.template` to `.env`.
      ```sh
      mv .env.template .env
      ```
   2. Generate value for `APP_SECRET` variable:
      ```sh
      php -r "echo bin2hex(random_bytes(32));"
      ```
   3. (Optional) Adjust the database connection details if you want to use different database system
4. Run the application using Docker compose:
   ```sh
   docker-compose up -d
   ```
   The `-d` flag runs the containers in detached mode. To see the logs, omit the flag.
    ```sh
    docker-compose up
    ```

5. Navigate to `http://localhost:8080` in your browser and you should see the application running.

## Roadmap

Information about the future plans for the project you can check in the [TODO.md](TODO.md) file.

Check out the [open issues](https://github.com/xxNauty/RadioAmateurToolkit_PHP/issues) for a full list of proposed features.

## Contributing

Contributions are what make the open-source community amazing! Follow these steps to contribute:

1. Fork the Project.
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`).
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`).
4. Push to the Branch (`git push origin feature/AmazingFeature`).
5. Open a Pull Request.

## License

This project is licensed under the MIT License. You are free to use, modify, and distribute this software, 
but **please include attribution to the original author (xxNauty)** in any distributed versions or substantial 
portions of the software.

See the [LICENSE](LICENSE.md) file for details.

[//]: # (## Contact)

[//]: # ()
[//]: # (Your Name - [@your_twitter_handle]&#40;https://twitter.com/your_twitter_handle&#41; - your_email@example.com)

[//]: # ()
[//]: # (Project Link: [https://github.com/your_username/your_repository]&#40;https://github.com/your_username/your_repository&#41;)
