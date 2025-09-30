<?php
class Device {
    private string $mac;
    private ?string $ip;
    private string $model;
    private DateTime $lastSeen;

    public function __construct(string $mac, ?string $ip, string $model, DateTime $lastSeen) {
        $this->mac = $mac; $this->ip = $ip; $this->model = $model; $this->lastSeen = $lastSeen;
    }
    public function getMac(): string { return $this->mac; }
    public function getIp(): ?string { return $this->ip; }
    public function getModel(): string { return $this->model; }
    public function getLastSeen(): DateTime { return $this->lastSeen; }
    public function updateLastSeen(DateTime $dt): void { $this->lastSeen = $dt; }

}