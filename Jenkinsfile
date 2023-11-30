node {
  stage('git') {
    git 'https://github.com/YasinPiricci23/deneme.git'
  }
  stage('SonarQube analysis') {
    def scannerHome = tool 'sonar';
    withSonarQubeEnv() { // If you have configured more than one global server connection, you can specify its name
      sh "${scannerHome}/bin/sonar-scanner -X -Dsonar.projectKey=test -Dsonar.sources=. -Dsonar.host.url=http://host.docker.internal:9000  -Dsonar.token=sqp_67e445bc1363f015f6502340d4f3a48f56feab70 -Dsonar.sourceEncoding=UTF-8"
    }
  }
 /* stage("Quality gate") {
    timeout(time: 1, unit: 'MINUTES') {
       waitForQualityGate abortPipeline: true
   } 
  }*/
}
