pipeline {
 agent any
 stages {
        stage("Build") {
            environment {
                DB_HOST = "localhost"
                DB_DATABASE = "wolodb"
                DB_PORT = "3306"
                DB_USERNAME = "wolouser"
                DB_PASSWORD = 'AURW357^@64faf%GSh'
            }
            steps {
                sh 'php --version'
                sh 'composer install'
                sh 'composer --version'
                sh 'cp .env.example .env'
                sh 'cp .env.example .env'
                sh 'echo DB_HOST=${DB_HOST} >> .env'
                sh 'echo DB_PORT=${DB_PORT} >> .env'
                sh 'echo DB_USERNAME=${DB_USERNAME} >> .env'
                sh 'echo DB_DATABASE=${DB_DATABASE} >> .env'
                sh 'echo DB_PASSWORD=${DB_PASSWORD} >> .env'
                sh 'php artisan key:generate'
                sh 'cp .env .env.testing'
                sh 'php artisan migrate'
            }
        }
  }
}
