node {
  stage('SCM') {
    checkout scm
  }
  stage('SonarQube Analysis') {
    def scannerHome = tool 'sonar';
    withSonarQubeEnv() {
    sh "${scannerHome}/bin/sonar-scanner" 
/* -X -Dsonar.projectKey=deneme-1 -Dsonar.sources=. -Dsonar.host.url=http://host.docker.internal:9000  -Dsonar.token=sqb_bcc9210004d8ec7a3ca9f6d88228e4e6c2c4c699 -Dsonar.sourceEncoding=UTF-8" */
  stage("Quality gate") {
   
    def qg = waitForQualityGate()
      if (qg.status != 'OK') {
      error "Quality Gate başarısız: ${qg.status}"
   
  }
    }
  }
}
}  
