pipeline {
       agent any

       stages {
           stage('Checkout') {
               steps {
                   
                   git 'https://github.com/br70-Solution/pipelineDemo1.git'
               }
           }
           stage('Build') {
               steps {
                  
                   bat 'php index.php'
               }
           }
         }

}
