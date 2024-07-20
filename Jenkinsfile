pipeline {
       agent any

       stages {
           stage('Checkout') {
               steps {
                   
                   git 'https://github.com/your-repo/php-project.git'
               }
           }
           stage('Build') {
               steps {
                  
                   bat 'php index.php'
               }
           }
         }

}
