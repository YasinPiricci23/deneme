node {
  stage('git') {
    git 'https://github.com/YasinPiricci23/deneme.git'
  }
  stage('SonarQube analysis') {
    def scannerHome = tool 'sonar';
    withSonarQubeEnv() { // If you have configured more than one global server connection, you can specify its name
      sh "${scannerHome}/bin/sonar-scanner -X "
      "-Dsonar.projectKey=argo-wf" +
      "-Dsonar.source=." +
      "-Dsonar.sourceEncoding=UTF-8" 
    }
  }
}
