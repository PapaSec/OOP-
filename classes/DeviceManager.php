<?php

class DeviceManager {
    /** @var array<string,Device> */
    private array $devices = [];

    public function addDevice(Device $d): void {
        $this->devices[$d->getMac()] = $d;
    }

    public function getDeviceByMac(string $mac): ?Device {
        return $this->devices[$mac] ?? null;
    }

    public function devicesNotSeenSince(DateTime $dt): array {
        $out = [];
        foreach ($this->devices as $d) {
            if ($d->getLastSeen() < $dt) $out[] = $d;
        }
        return $out;
    }
}