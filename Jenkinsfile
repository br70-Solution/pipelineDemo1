pipeline {
       agent any

       stages {
           stage('Checkout') {
               steps {
                   
                   bat 'php index.php'
               }
           }
              stage('Deploy') {
               steps {
                   // Simuler le déploiement en copiant les fichiers vers un répertoire de déploiement
                   script {
                       def deployDir ="C:\\Users\\Fujitsu\\Desktop\\deploy"
                       bat "mkdir ${deployDir}"
                       bat "copy index.php ${deployDir}\\"
                       echo "Déploiement réussi dans ${deployDir}"
                   }
             
           
         }

}
       }
}
