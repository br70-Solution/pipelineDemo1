pipeline {
       agent any

       stages {

               stage('Clone Repository') {
            steps {
                git branch: 'main', url: 'https://github.com/br70-Solution/pipelineDemo1.git'
            }
              
          
}

stage('Build') {
               steps {
                   
                   bat 'php index.php'
               }
           }
              stage('Test') {
               steps {
                   // Exécuter le script de test PHP sur Windows
                   bat 'php test.php'
               }
              }         
              
              stage('Deploy') {
               steps {
                   // Simuler le déploiement en copiant les fichiers vers un répertoire de déploiement
                   script {
                       def deployDir ="C:\\Users\\Fujitsu\\Desktop\\deploy2"
                      // bat "mkdir ${deployDir}"
                       bat "copy index.php ${deployDir}\\"
                       echo "Déploiement réussi dans ${deployDir}"
                   }
             
           
         }

}
      


}       

}
